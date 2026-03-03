<?php
// 获取当前页面文件名
$current_page = basename($_SERVER['PHP_SELF']);

// 判断当前菜单项是否激活
function isActive($page) {
    global $current_page;
    return $current_page === $page ? 'active' : '';
}

// isAdmin() 函数已在 check_admin.php 中定义
?>
<aside class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <div class="logo-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h2>华赛信息咨询</h2>
        </div>
        <p>后台管理系统</p>
    </div>
    <nav class="sidebar-menu">
        <a href="index.php" class="menu-item <?php echo isActive('index.php'); ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
            </svg>
            控制台
        </a>
        <a href="news_list.php" class="menu-item <?php echo isActive('news_list.php') || isActive('news_add.php') || isActive('news_edit.php') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
            </svg>
            新闻管理
        </a>
        <a href="contact_list.php" class="menu-item <?php echo isActive('contact_list.php') || isActive('contact_view.php') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
            </svg>
            留言管理
        </a>
        <?php if (isAdmin()): ?>
        <a href="user_list.php" class="menu-item <?php echo isActive('user_list.php') || isActive('user_add.php') || isActive('user_edit.php') ? 'active' : ''; ?>">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            用户管理
        </a>
        <?php endif; ?>
    </nav>
</aside>
