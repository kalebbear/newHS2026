<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 获取留言ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: contact_list.php');
    exit;
}

$id = intval($_GET['id']);

// 获取留言详情
$stmt = $pdo->prepare("SELECT * FROM contact_messages WHERE id = ?");
$stmt->execute([$id]);
$message = $stmt->fetch();

if (!$message) {
    header('Location: contact_list.php');
    exit;
}

// 自动标记为已读
if ($message['status'] == 'unread') {
    $stmt = $pdo->prepare("UPDATE contact_messages SET status = 'read' WHERE id = ?");
    $stmt->execute([$id]);
    $message['status'] = 'read';
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看留言 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <div class="page-title">
                    <h1>查看留言详情</h1>
                    <p class="breadcrumb">首页 / 留言管理 / 查看留言</p>
                </div>
                <div class="user-actions">
                    <a href="contact_list.php" class="btn btn-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="19" y1="12" x2="5" y2="12"/>
                            <polyline points="12 19 5 12 12 5"/>
                        </svg>
                        返回列表
                    </a>
                    <span class="welcome-text">欢迎，<?php echo $_SESSION['admin_username']; ?></span>
                    <a href="logout.php" class="btn btn-danger">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/>
                        </svg>
                        退出登录
                    </a>
                </div>
            </div>
            
            <div class="detail-card">
                <div class="detail-header">
                    <h2>留言 #<?php echo $message['id']; ?></h2>
                    <div class="detail-meta">
                        <span>提交时间：<?php echo date('Y-m-d H:i:s', strtotime($message['created_at'])); ?></span>
                        <span>状态：
                            <span class="status-label status-<?php echo $message['status']; ?>">
                                <?php 
                                $status_text = ['unread' => '未读', 'read' => '已读', 'replied' => '已回复'];
                                echo $status_text[$message['status']];
                                ?>
                            </span>
                        </span>
                    </div>
                </div>
                
                <div class="detail-body">
                    <div class="detail-row">
                        <div class="detail-label">姓名</div>
                        <div class="detail-value"><?php echo htmlspecialchars($message['name']); ?></div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">邮箱</div>
                        <div class="detail-value"><?php echo htmlspecialchars($message['email']); ?></div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">电话</div>
                        <div class="detail-value"><?php echo htmlspecialchars($message['phone'] ?: '-'); ?></div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">留言内容</div>
                        <div class="detail-value">
                            <div class="detail-content">
                                <?php echo nl2br(htmlspecialchars($message['message'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-actions" style="padding: 25px; border-top: 1px solid var(--border-color);">
                    <a href="contact_list.php" class="btn btn-secondary">返回列表</a>
                    <?php if ($message['status'] == 'read'): ?>
                    <a href="contact_list.php?mark=<?php echo $message['id']; ?>&status=replied" class="btn btn-success">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                        标记为已回复
                    </a>
                    <?php endif; ?>
                    <?php if (isAdmin()): ?>
                    <a href="contact_list.php?delete=<?php echo $message['id']; ?>" class="btn btn-danger" onclick="return confirm('确定要删除这条留言吗？')">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="3 6 5 6 21 6"/>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                        </svg>
                        删除留言
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
