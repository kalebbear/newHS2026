<?php
require_once '../db_config.php';

// 创建用户表
$sql = "CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

try {
    $pdo->exec($sql);
    echo "用户表创建成功！<br>";
    
    // 检查是否已有管理员账号
    $stmt = $pdo->query("SELECT COUNT(*) FROM admin_users WHERE role = 'admin'");
    $adminCount = $stmt->fetchColumn();
    
    if ($adminCount == 0) {
        // 创建默认管理员账号
        $hashedPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO admin_users (username, password, role) VALUES (?, ?, 'admin')");
        $stmt->execute(['admin', $hashedPassword]);
        echo "默认管理员账号创建成功！<br>";
        echo "用户名：admin<br>";
        echo "密码：admin123<br>";
    }
    
    echo "<a href='login.php'>返回登录页面</a>";
} catch (PDOException $e) {
    echo "创建表失败: " . $e->getMessage();
}
?>
