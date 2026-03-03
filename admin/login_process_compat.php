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

// 兼容所有 PHP 版本的密码验证
function verify_password_compat($password, $hash) {
    // 检查是否是 bcrypt 哈希（以 $2y$ 开头）
    if (substr($hash, 0, 4) === '$2y$') {
        // 如果是 PHP 5.5+，使用 password_verify
        if (function_exists('password_verify')) {
            return password_verify($password, $hash);
        }
        // PHP 5.3 - 5.4 使用 crypt
        if (function_exists('crypt')) {
            return crypt($password, $hash) === $hash;
        }
        // 更低的版本，无法验证 bcrypt，返回 false
        return false;
    }
    
    // 如果是 MD5 哈希（32位十六进制）
    if (strlen($hash) === 32 && ctype_xdigit($hash)) {
        return md5($password) === $hash;
    }
    
    // 明文比较（不推荐，但为了兼容）
    return $password === $hash;
}

if ($user && verify_password_compat($password, $user['password'])) {
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
