<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 获取新闻列表
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$itemsPerPage = 10;
$offset = ($page - 1) * $itemsPerPage;

// 获取总记录数
$totalItems = $pdo->query("SELECT COUNT(*) FROM news")->fetchColumn();
$totalPages = ceil($totalItems / $itemsPerPage);

// 获取新闻列表
$news = $pdo->query("SELECT id, title, category, author, views, status, published_at FROM news ORDER BY id DESC LIMIT $offset, $itemsPerPage")->fetchAll();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻管理 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <div class="page-title">
                    <h1>新闻管理</h1>
                    <p class="breadcrumb">首页 / 新闻管理</p>
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
            
            <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted'): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                新闻删除成功！
            </div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'added'): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                新闻添加成功！
            </div>
            <?php elseif (isset($_GET['msg']) && $_GET['msg'] === 'updated'): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                新闻更新成功！
            </div>
            <?php endif; ?>
            
            <div class="data-table">
                <div class="table-header">
                    <h2>新闻列表</h2>
                    <?php if (isAdmin()): ?>
                    <a href="news_add.php" class="btn btn-success">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        添加新闻
                    </a>
                    <?php endif; ?>
                </div>
                
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>标题</th>
                                <th>分类</th>
                                <th>作者</th>
                                <th>浏览</th>
                                <th>状态</th>
                                <th>发布时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($news as $item): ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td class="truncate"><?php echo htmlspecialchars($item['title']); ?></td>
                                <td><?php echo htmlspecialchars($item['category']); ?></td>
                                <td><?php echo htmlspecialchars($item['author']); ?></td>
                                <td><?php echo number_format($item['views']); ?></td>
                                <td>
                                    <span class="status-label <?php echo $item['status'] == 1 ? 'status-published' : 'status-draft'; ?>">
                                        <?php echo $item['status'] == 1 ? '已发布' : '草稿'; ?>
                                    </span>
                                </td>
                                <td><?php echo $item['published_at']; ?></td>
                                <td>
                                    <div class="action-group">
                                        <?php if (isAdmin()): ?>
                                        <a href="news_edit.php?id=<?php echo $item['id']; ?>" class="action-icon edit" title="编辑">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                            </svg>
                                        </a>
                                        <a href="news_delete.php?id=<?php echo $item['id']; ?>" class="action-icon delete" title="删除" onclick="return confirm('确定要删除这条新闻吗？')">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                            </svg>
                                        </a>
                                        <?php else: ?>
                                        <span style="color: #999; font-size: 12px;">无权限</span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <?php if ($totalPages > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>">上一页</a>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i == $page): ?>
                    <span class="current"><?php echo $i; ?></span>
                    <?php else: ?>
                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                
                <?php if ($page < $totalPages): ?>
                <a href="?page=<?php echo $page + 1; ?>">下一页</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </main>
    </div>
</body>
</html>
