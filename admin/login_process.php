<?php
session_start();
require_once '../db_config.php';

// 获取登录信息
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// 从数据库验证用户
$stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ? AND status = 1");
$stmt->execute(array($username));
$user = $stmt->fetch();

// 验证密码（支持多种格式）
function verify_password_all($password, $hash) {
    // 1. 检查是否是 bcrypt 哈希（以 $2y$ 或 $2a$ 开头）
    if (substr($hash, 0, 4) === '$2y$' || substr($hash, 0, 4) === '$2a$') {
        if (function_exists('password_verify')) {
            return password_verify($password, $hash);
        }
        if (function_exists('crypt')) {
            return crypt($password, $hash) === $hash;
        }
        return false;
    }
    
    // 2. 检查是否是 MD5 哈希（32位十六进制）
    if (strlen($hash) === 32 && ctype_xdigit($hash)) {
        return md5($password) === $hash;
    }
    
    // 3. 明文比较
    return $password === $hash;
}

if ($user && verify_password_all($password, $user['password'])) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $user['username'];
    $_SESSION['admin_role'] = $user['role'];
    $_SESSION['admin_user_id'] = $user['id'];
    header('Location: index.php');
    exit;
} else {
    $error = urlencode('用户名或密码错误');
    header('Location: login.php?error=' . $error);
    exit;
}
?>
