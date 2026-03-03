<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 只有管理员可以访问此页面
checkEditPermission();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    // 验证
    if (empty($username) || empty($password)) {
        $error = '用户名和密码不能为空';
    } elseif (strlen($password) < 6) {
        $error = '密码长度至少6位';
    } else {
        // 检查用户名是否已存在
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin_users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetchColumn() > 0) {
            $error = '用户名已存在';
        } else {
            // 创建用户
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO admin_users (username, password, role) VALUES (?, ?, ?)");
            try {
                $stmt->execute([$username, $hashedPassword, $role]);
                header('Location: user_list.php?msg=added');
                exit;
            } catch (PDOException $e) {
                $error = '创建用户失败';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加用户 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
    
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <h1>添加用户</h1>
                <div class="user-actions">
                    <a href="user_list.php" class="back-btn">← 返回列表</a>
                    <span>欢迎，<?php echo $_SESSION['admin_username']; ?></span>
                    <a href="logout.php" class="btn btn-danger">退出登录</a>
                </div>
            </div>
            
            <?php if ($error): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <div class="form-card">
                <form method="post">
                    <div class="form-group">
                        <label>用户名 *</label>
                        <input type="text" name="username" required placeholder="请输入用户名">
                    </div>
                    <div class="form-group">
                        <label>密码 *</label>
                        <input type="password" name="password" required placeholder="请输入密码（至少6位）">
                        <p class="hint">密码长度至少6位</p>
                    </div>
                    <div class="form-group">
                        <label>角色 *</label>
                        <select name="role" required>
                            <option value="user">普通用户（只能查看）</option>
                            <option value="admin">管理员（可以增删改）</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">创建用户</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
