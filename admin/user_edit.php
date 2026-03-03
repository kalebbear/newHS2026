<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 只有管理员可以访问此页面
checkEditPermission();

// 获取用户ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: user_list.php');
    exit;
}

$id = intval($_GET['id']);

// 获取用户信息
$stmt = $pdo->prepare("SELECT * FROM admin_users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (!$user) {
    header('Location: user_list.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    // 验证
    if (empty($username)) {
        $error = '用户名不能为空';
    } else {
        // 检查用户名是否已被其他用户使用
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin_users WHERE username = ? AND id != ?");
        $stmt->execute([$username, $id]);
        if ($stmt->fetchColumn() > 0) {
            $error = '用户名已存在';
        } else {
            // 更新用户
            if (!empty($password)) {
                if (strlen($password) < 6) {
                    $error = '密码长度至少6位';
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("UPDATE admin_users SET username = ?, password = ?, role = ? WHERE id = ?");
                    try {
                        $stmt->execute([$username, $hashedPassword, $role, $id]);
                        header('Location: user_list.php?msg=updated');
                        exit;
                    } catch (PDOException $e) {
                        $error = '更新用户失败';
                    }
                }
            } else {
                $stmt = $pdo->prepare("UPDATE admin_users SET username = ?, role = ? WHERE id = ?");
                try {
                    $stmt->execute([$username, $role, $id]);
                    header('Location: user_list.php?msg=updated');
                    exit;
                } catch (PDOException $e) {
                    $error = '更新用户失败';
                }
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
    <title>编辑用户 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
    
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <h1>编辑用户</h1>
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
                        <input type="text" name="username" required value="<?php echo htmlspecialchars($user['username']); ?>" placeholder="请输入用户名">
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <input type="password" name="password" placeholder="不修改请留空（至少6位）">
                        <p class="hint">不修改密码请留空</p>
                    </div>
                    <div class="form-group">
                        <label>角色 *</label>
                        <select name="role" required>
                            <option value="user" <?php echo $user['role'] === 'user' ? 'selected' : ''; ?>>普通用户（只能查看）</option>
                            <option value="admin" <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>管理员（可以增删改）</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">保存修改</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
