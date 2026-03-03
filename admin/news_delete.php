<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 只有管理员可以删除新闻
checkEditPermission();

// 获取新闻ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    try {
        $stmt = $pdo->prepare("DELETE FROM news WHERE id = :id");
        $stmt->execute([':id' => $id]);
        
        if ($stmt->rowCount() > 0) {
            header('Location: news_list.php?msg=deleted');
            exit;
        }
    } catch (PDOException $e) {
        // 删除失败，跳转到列表页
    }
}

// 如果没有成功删除，也跳转到列表页
header('Location: news_list.php');
exit;
?>
