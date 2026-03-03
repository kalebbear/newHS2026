<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 只有管理员可以访问此页面
checkEditPermission();

// 处理删除操作
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = intval($_GET['delete']);
    // 不能删除自己
    if ($id == $_SESSION['admin_user_id']) {
        $error = '不能删除当前登录账号';
    } else {
        try {
            $stmt = $pdo->prepare("DELETE FROM admin_users WHERE id = ?");
            $stmt->execute([$id]);
            header('Location: user_list.php?msg=deleted');
            exit;
        } catch (PDOException $e) {
            $error = '删除失败';
        }
    }
}

// 处理状态切换
if (isset($_GET['toggle']) && is_numeric($_GET['toggle'])) {
    $id = intval($_GET['toggle']);
    if ($id == $_SESSION['admin_user_id']) {
        $error = '不能禁用自己';
    } else {
        try {
            $stmt = $pdo->prepare("UPDATE admin_users SET status = IF(status = 1, 0, 1) WHERE id = ?");
            $stmt->execute([$id]);
            header('Location: user_list.php?msg=updated');
            exit;
        } catch (PDOException $e) {
            $error = '操作失败';
        }
    }
}

// 获取所有用户
$users = $pdo->query("SELECT * FROM admin_users ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户管理 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
    
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <h1>用户管理</h1>
                <div class="user-actions">
                    <span>欢迎，<?php echo $_SESSION['admin_username']; ?> (<?php echo $_SESSION['admin_role'] === 'admin' ? '管理员' : '普通用户'; ?>)</span>
                    <a href="logout.php" class="btn btn-danger">退出登录</a>
                </div>
            </div>
            
            <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
            <div class="alert alert-success">用户删除成功！</div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'updated'): ?>
            <div class="alert alert-success">状态更新成功！</div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'added'): ?>
            <div class="alert alert-success">用户添加成功！</div>
            <?php elseif (isset($error)): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <div style="margin-bottom: 20px;">
                <a href="user_add.php" class="btn btn-success">+ 添加用户</a>
            </div>
            
            <div class="data-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>角色</th>
                            <th>状态</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr class="<?php echo $user['id'] == $_SESSION['admin_user_id'] ? 'current-user' : ''; ?>">
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo htmlspecialchars($user['username']); ?> <?php if($user['id'] == $_SESSION['admin_user_id']) echo '<span style="color: #856404; font-size: 12px;">(当前用户)</span>'; ?></td>
                            <td>
                                <span class="role-badge <?php echo $user['role'] === 'admin' ? 'role-admin' : 'role-user'; ?>">
                                    <?php echo $user['role'] === 'admin' ? '管理员' : '普通用户'; ?>
                                </span>
                            </td>
                            <td>
                                <span class="status-badge <?php echo $user['status'] ? 'status-active' : 'status-inactive'; ?>">
                                    <?php echo $user['status'] ? '启用' : '禁用'; ?>
                                </span>
                            </td>
                            <td><?php echo date('Y-m-d H:i', strtotime($user['created_at'])); ?></td>
                            <td>
                                <div class="action-btns">
                                    <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="action-btn edit-btn">编辑</a>
                                    <?php if ($user['id'] != $_SESSION['admin_user_id']): ?>
                                    <a href="?toggle=<?php echo $user['id']; ?>" class="action-btn toggle-btn"><?php echo $user['status'] ? '禁用' : '启用'; ?></a>
                                    <a href="?delete=<?php echo $user['id']; ?>" class="action-btn delete-btn" onclick="return confirm('确定要删除此用户吗？')">删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
