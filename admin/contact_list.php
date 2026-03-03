<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 处理删除操作（仅管理员）
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    if (!isAdmin()) {
        header('Location: contact_list.php?msg=no_permission');
        exit;
    }
    $id = intval($_GET['delete']);
    try {
        $stmt = $pdo->prepare("DELETE FROM contact_messages WHERE id = ?");
        $stmt->execute(array($id));
        header('Location: contact_list.php?msg=deleted');
        exit;
    } catch (PDOException $e) {
        $error = '删除失败';
    }
}

// 处理状态更新
if (isset($_GET['mark']) && is_numeric($_GET['mark']) && isset($_GET['status'])) {
    $id = intval($_GET['mark']);
    $status = $_GET['status'];
    $allowed_status = array('unread', 'read', 'replied');
    if (in_array($status, $allowed_status)) {
        try {
            $stmt = $pdo->prepare("UPDATE contact_messages SET status = ? WHERE id = ?");
            $stmt->execute(array($status, $id));
            header('Location: contact_list.php?msg=updated');
            exit;
        } catch (PDOException $e) {
            $error = '更新失败';
        }
    }
}

// 获取所有留言
$stmt = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll();

// 统计
$unread_count = count(array_filter($messages, fn($m) => $m['status'] == 'unread'));
$read_count = count(array_filter($messages, fn($m) => $m['status'] == 'read'));
$replied_count = count(array_filter($messages, fn($m) => $m['status'] == 'replied'));
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言管理 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <div class="page-title">
                    <h1>留言管理</h1>
                    <p class="breadcrumb">首页 / 留言管理</p>
                </div>
                <div class="user-actions">
                    <span class="welcome-text">欢迎，<?php echo $_SESSION['admin_username']; ?></span>
                    <a href="logout.php" class="btn btn-danger">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/>
                        </svg>
                        退出登录
                    </a>
                </div>
            </div>
            
            <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                留言删除成功！
            </div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'updated'): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                状态更新成功！
            </div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'no_permission'): ?>
            <div class="alert alert-error">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                您没有权限执行此操作！
            </div>
            <?php endif; ?>
            
            <div class="stats-grid">
                <div class="stat-card danger">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>未读留言</h3>
                        <div class="number"><?php echo $unread_count; ?></div>
                    </div>
                </div>
                <div class="stat-card info">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>已读留言</h3>
                        <div class="number"><?php echo $read_count; ?></div>
                    </div>
                </div>
                <div class="stat-card success">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>已回复</h3>
                        <div class="number"><?php echo $replied_count; ?></div>
                    </div>
                </div>
                <div class="stat-card primary">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>总留言数</h3>
                        <div class="number"><?php echo count($messages); ?></div>
                    </div>
                </div>
            </div>
            
            <div class="data-table">
                <div class="table-header">
                    <h2>留言列表</h2>
                </div>
                
                <?php if (empty($messages)): ?>
                <div class="empty-state">
                    <p>暂无留言</p>
                </div>
                <?php else: ?>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>姓名</th>
                                <th>邮箱</th>
                                <th>电话</th>
                                <th>留言内容</th>
                                <th>状态</th>
                                <th>提交时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($messages as $message): ?>
                            <tr class="<?php echo $message['status'] == 'unread' ? 'unread' : ''; ?>">
                                <td><?php echo $message['id']; ?></td>
                                <td><?php echo htmlspecialchars($message['name']); ?></td>
                                <td><?php echo htmlspecialchars($message['email']); ?></td>
                                <td><?php echo htmlspecialchars($message['phone'] ? $message['phone'] : '-'); ?></td>
                                <td class="truncate" title="<?php echo htmlspecialchars($message['message']); ?>">
                                    <?php echo htmlspecialchars(mb_substr($message['message'], 0, 30)) . (mb_strlen($message['message']) > 30 ? '...' : ''); ?>
                                </td>
                                <td>
                                    <span class="status-label status-<?php echo $message['status']; ?>">
                                        <?php 
                                        $status_text = array('unread' => '未读', 'read' => '已读', 'replied' => '已回复');
                                        echo $status_text[$message['status']];
                                        ?>
                                    </span>
                                </td>
                                <td><?php echo date('Y-m-d H:i', strtotime($message['created_at'])); ?></td>
                                <td>
                                    <div class="action-group">
                                        <a href="contact_view.php?id=<?php echo $message['id']; ?>" class="action-icon view" title="查看">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                        </a>
                                        <?php if ($message['status'] == 'unread'): ?>
                                        <a href="?mark=<?php echo $message['id']; ?>&status=read" class="action-icon edit" title="标记已读">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="20 6 9 17 4 12"/>
                                            </svg>
                                        </a>
                                        <?php elseif ($message['status'] == 'read'): ?>
                                        <a href="?mark=<?php echo $message['id']; ?>&status=replied" class="action-icon edit" title="标记已回复">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                                <polyline points="22 4 12 14.01 9 11.01"/>
                                            </svg>
                                        </a>
                                        <?php endif; ?>
                                        <?php if (isAdmin()): ?>
                                        <a href="?delete=<?php echo $message['id']; ?>" class="action-icon delete" title="删除" onclick="return confirm('确定要删除这条留言吗？')">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                            </svg>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>
</html>
