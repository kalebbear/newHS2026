<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 获取统计数据
$totalNews = $pdo->query("SELECT COUNT(*) FROM news WHERE status = 1")->fetchColumn();
$totalViews = $pdo->query("SELECT SUM(views) FROM news")->fetchColumn();
$latestNews = $pdo->query("SELECT COUNT(*) FROM news WHERE status = 1 AND published_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)")->fetchColumn();
$unreadMessages = $pdo->query("SELECT COUNT(*) FROM contact_messages WHERE status = 'unread'")->fetchColumn();
$totalMessages = $pdo->query("SELECT COUNT(*) FROM contact_messages")->fetchColumn();

// 获取最新新闻
$recentNews = $pdo->query("SELECT id, title, views, published_at FROM news WHERE status = 1 ORDER BY published_at DESC LIMIT 5")->fetchAll();

// 获取最新留言
$recentMessages = $pdo->query("SELECT id, name, message, created_at, status FROM contact_messages ORDER BY created_at DESC LIMIT 5")->fetchAll();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <div class="page-title">
                    <h1>控制台</h1>
                    <p class="breadcrumb">首页 / 控制台</p>
                </div>
                <div class="user-actions">
                    <span class="welcome-text">欢迎，<?php echo $_SESSION['admin_username']; ?></span>
                    <a href="logout.php" class="btn btn-danger">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/>
                        </svg>
                        退出登录
                    </a>
                </div>
            </div>
            
            <!-- 统计卡片 -->
            <div class="stats-grid">
                <div class="stat-card primary">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>已发布新闻</h3>
                        <div class="number"><?php echo $totalNews; ?></div>
                    </div>
                </div>
                
                <div class="stat-card success">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>总浏览量</h3>
                        <div class="number"><?php echo number_format($totalViews ?: 0); ?></div>
                    </div>
                </div>
                
                <div class="stat-card warning">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>近7天新增</h3>
                        <div class="number"><?php echo $latestNews; ?></div>
                    </div>
                </div>
                
                <div class="stat-card <?php echo $unreadMessages > 0 ? 'danger' : 'info'; ?>">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>未读留言</h3>
                        <div class="number"><?php echo $unreadMessages; ?></div>
                        <?php if($unreadMessages > 0): ?>
                        <span class="badge">新消息</span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="stat-card info">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>总留言数</h3>
                        <div class="number"><?php echo $totalMessages; ?></div>
                    </div>
                </div>
            </div>
            
            <!-- 快捷操作 -->
            <div class="quick-actions">
                <h2>快捷操作</h2>
                <div class="action-buttons">
                    <a href="news_add.php" class="action-btn btn-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        添加新闻
                    </a>
                    <a href="news_list.php" class="action-btn btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                        管理新闻
                    </a>
                    <a href="contact_list.php" class="action-btn btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        留言管理
                        <?php if($unreadMessages > 0): ?>
                        <span class="btn-badge"><?php echo $unreadMessages; ?></span>
                        <?php endif; ?>
                    </a>
                    <a href="../index.php" target="_blank" class="action-btn btn-outline">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                        </svg>
                        查看前台
                    </a>
                </div>
            </div>
            
            <!-- 两列布局 -->
            <div class="dashboard-grid">
                <!-- 最新新闻 -->
                <div class="dashboard-card">
                    <div class="card-header">
                        <h3>最新新闻</h3>
                        <a href="news_list.php" class="view-all">查看全部 →</a>
                    </div>
                    <div class="card-body">
                        <?php if(empty($recentNews)): ?>
                        <div class="empty-state">
                            <p>暂无新闻</p>
                        </div>
                        <?php else: ?>
                        <ul class="list-group">
                            <?php foreach($recentNews as $news): ?>
                            <li class="list-item">
                                <div class="item-content">
                                    <a href="news_edit.php?id=<?php echo $news['id']; ?>" class="item-title"><?php echo htmlspecialchars($news['title']); ?></a>
                                    <span class="item-meta"><?php echo date('Y-m-d', strtotime($news['published_at'])); ?> · <?php echo $news['views']; ?> 次浏览</span>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- 最新留言 -->
                <div class="dashboard-card">
                    <div class="card-header">
                        <h3>最新留言</h3>
                        <a href="contact_list.php" class="view-all">查看全部 →</a>
                    </div>
                    <div class="card-body">
                        <?php if(empty($recentMessages)): ?>
                        <div class="empty-state">
                            <p>暂无留言</p>
                        </div>
                        <?php else: ?>
                        <ul class="list-group">
                            <?php foreach($recentMessages as $msg): ?>
                            <li class="list-item <?php echo $msg['status'] == 'unread' ? 'unread' : ''; ?>">
                                <div class="item-content">
                                    <div class="item-header">
                                        <span class="item-name"><?php echo htmlspecialchars($msg['name']); ?></span>
                                        <?php if($msg['status'] == 'unread'): ?>
                                        <span class="status-badge">未读</span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="item-preview"><?php echo mb_substr(htmlspecialchars($msg['message']), 0, 50) . '...'; ?></p>
                                    <span class="item-meta"><?php echo date('Y-m-d H:i', strtotime($msg['created_at'])); ?></span>
                                </div>
                                <a href="contact_view.php?id=<?php echo $msg['id']; ?>" class="item-action">查看</a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
