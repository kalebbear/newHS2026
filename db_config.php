<?php
// 互联网主机数据库配置
$host = 'sdm168070275.my3w.com';
$dbname = 'sdm168070275_db';
$username = 'sdm168070275';
$password = 'HS@612a2026';

try {
    // 使用 utf8 字符集连接（与数据库一致）
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // 设置连接字符集为 utf8
    $pdo->exec("SET NAMES utf8");
    $pdo->exec("SET CHARACTER SET utf8");
    $pdo->exec("SET CHARACTER_SET_CONNECTION=utf8");
} catch (PDOException $e) {
    die("数据库连接失败: " . $e->getMessage());
}
?>
