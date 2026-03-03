<?php
session_start();
require_once '../db_config.php';

// 检查是否已登录
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// 检查是否为管理员
function isAdmin() {
    return isset($_SESSION['admin_role']) && $_SESSION['admin_role'] === 'admin';
}

// 检查是否有编辑权限（只有管理员可以编辑）
function checkEditPermission() {
    if (!isAdmin()) {
        header('Location: index.php?error=' . urlencode('您没有权限执行此操作'));
        exit;
    }
}
?>
