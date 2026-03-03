<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '华赛新闻';
$pageDescription = '华赛咨询最新动态、行业资讯、公司活动、成功案例分享。了解CMMI、ASPICE认证最新政策和行业趋势。';
$pageKeywords = '华赛新闻,CMMI动态,ASPICE资讯,行业新闻,认证咨询';
?>
<?php include 'head.php'; ?>
<?php include 'db_config.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <body
    class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
;
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => '公司资讯', 'url' => 'products.html'],
    ['title' => '华赛新闻', 'url' => null]
];
include 'pageheader.php';

// 获取搜索和分类参数
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$page = isset($_GET['page_num']) ? max(1, intval($_GET['page_num'])) : 1;
$itemsPerPage = 20;

// 构建查询条件
$where = "WHERE status = 1";
$params = [];

if (!empty($search)) {
    $where .= " AND title LIKE :search";
    $params[':search'] = '%' . $search . '%';
}

if (!empty($category)) {
    $where .= " AND category = :category";
    $params[':category'] = $category;
}

// 获取总记录数
$countSql = "SELECT COUNT(*) FROM news " . $where;
$stmt = $pdo->prepare($countSql);
$stmt->execute($params);
$totalItems = $stmt->fetchColumn();
$totalPages = ceil($totalItems / $itemsPerPage);
$page = min($page, max(1, $totalPages));

// 获取新闻列表
$offset = ($page - 1) * $itemsPerPage;
$sql = "SELECT id, title, category, published_at FROM news " . $where . " ORDER BY published_at DESC LIMIT :limit OFFSET :offset";

$stmt = $pdo->prepare($sql);
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}
$stmt->bindValue(':limit', $itemsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$news = $stmt->fetchAll();

// 获取所有分类
$categories = $pdo->query("SELECT DISTINCT category FROM news WHERE status = 1 AND category IS NOT NULL AND category != '' ORDER BY category ASC")->fetchAll(PDO::FETCH_COLUMN);
?>
        <div class="m-ctypes">
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  
                  
                  <div style="max-width: 1000px; margin: 0 auto;">
                    
                    <form method="GET" action="" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px; padding: 20px; background: #f5f5f5; border-radius: 8px;">
                      <div style="flex: 1; min-width: 200px;">
                        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="搜索新闻..." style="width: 100%; padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px;">
                      </div>
                      <?php if (!empty($categories)): ?>
                      <div style="min-width: 150px;">
                        <select name="category" style="width: 100%; padding: 10px 15px; border: 1px solid #ddd; border-radius: 4px; font-size: 14px; background: #fff;" onchange="this.form.submit()">
                          <option value="">全部分类</option>
                          <?php foreach ($categories as $cat): ?>
                          <option value="<?php echo htmlspecialchars($cat); ?>" <?php echo $category === $cat ? 'selected' : ''; ?>><?php echo htmlspecialchars($cat); ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <?php endif; ?>
                      <div>
                        <button type="submit" style="padding: 10px 20px; background: #4a6fa5; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 14px;">搜索</button>
                      </div>
                      <?php if (!empty($search) || !empty($category)): ?>
                      <div>
                        <a href="news.php" style="padding: 10px 20px; background: #999; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; text-decoration: none; display: inline-block;">重置</a>
                      </div>
                      <?php endif; ?>
                    </form>
                    
                    <?php if (empty($news)): ?>
                    <div style="text-align: center; padding: 40px; color: #999;">
                      没有找到匹配的新闻
                    </div>
                    <?php else: ?>
                    <div id="newsList">
                      <?php foreach ($news as $item): ?>
                      <div class="news-item" style="display: flex; justify-content: space-between; align-items: center; padding: 20px 0; border-bottom: 1px solid #eee;">
                        <div style="flex: 1;">
                          <a href="news_detail.php?id=<?php echo $item['id']; ?>" style="color: #333; font-size: 16px; text-decoration: none; display: block; margin-bottom: 5px;"><?php echo htmlspecialchars($item['title']); ?></a>
                          <?php if (!empty($item['category'])): ?>
                          <span style="display: inline-block; padding: 2px 8px; background: #e8f0fe; color: #4a6fa5; font-size: 12px; border-radius: 3px;"><?php echo htmlspecialchars($item['category']); ?></span>
                          <?php endif; ?>
                        </div>
                        <span style="color: #999; font-size: 14px; white-space: nowrap; margin-left: 20px;"><?php echo date('Y-m-d', strtotime($item['published_at'])); ?></span>
                      </div>
                      <?php endforeach; ?>
                    </div>
                    
                    <?php if ($totalPages > 1): ?>
                    <div style="display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 40px; padding: 20px 0;">
                      <?php if ($page > 1): ?>
                      <a href="?<?php echo http_build_query(array_merge($_GET, ['page_num' => $page - 1])); ?>" style="padding: 8px 16px; border: 1px solid #ddd; background: #fff; border-radius: 4px; cursor: pointer; font-size: 14px; text-decoration: none; color: #333;">上一页</a>
                      <?php else: ?>
                      <span style="padding: 8px 16px; border: 1px solid #ddd; background: #f5f5f5; border-radius: 4px; font-size: 14px; color: #999; cursor: not-allowed;">上一页</span>
                      <?php endif; ?>
                      
                      <div style="display: flex; gap: 5px;">
                        <?php 
                        // 显示页码范围
                        $startPage = max(1, $page - 2);
                        $endPage = min($totalPages, $page + 2);
                        
                        if ($startPage > 1): 
                        ?>
                        <a href="?<?php echo http_build_query(array_merge($_GET, ['page_num' => 1])); ?>" style="padding: 8px 12px; border: 1px solid #ddd; background: #fff; border-radius: 4px; font-size: 14px; text-decoration: none; color: #333;">1</a>
                        <?php if ($startPage > 2): ?>
                        <span style="padding: 8px 12px; font-size: 14px; color: #999;">...</span>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php for ($i = $startPage; $i <= $endPage; $i++): ?>
                          <?php if ($i == $page): ?>
                          <span style="padding: 8px 12px; background: #4a6fa5; color: #fff; border-radius: 4px; font-size: 14px;"><?php echo $i; ?></span>
                          <?php else: ?>
                          <a href="?<?php echo http_build_query(array_merge($_GET, ['page_num' => $i])); ?>" style="padding: 8px 12px; border: 1px solid #ddd; background: #fff; border-radius: 4px; font-size: 14px; text-decoration: none; color: #333;"><?php echo $i; ?></a>
                          <?php endif; ?>
                        <?php endfor; ?>
                        
                        <?php if ($endPage < $totalPages): ?>
                        <?php if ($endPage < $totalPages - 1): ?>
                        <span style="padding: 8px 12px; font-size: 14px; color: #999;">...</span>
                        <?php endif; ?>
                        <a href="?<?php echo http_build_query(array_merge($_GET, ['page_num' => $totalPages])); ?>" style="padding: 8px 12px; border: 1px solid #ddd; background: #fff; border-radius: 4px; font-size: 14px; text-decoration: none; color: #333;"><?php echo $totalPages; ?></a>
                        <?php endif; ?>
                      </div>
                      
                      <?php if ($page < $totalPages): ?>
                      <a href="?<?php echo http_build_query(array_merge($_GET, ['page_num' => $page + 1])); ?>" style="padding: 8px 16px; border: 1px solid #ddd; background: #fff; border-radius: 4px; cursor: pointer; font-size: 14px; text-decoration: none; color: #333;">下一页</a>
                      <?php else: ?>
                      <span style="padding: 8px 16px; border: 1px solid #ddd; background: #f5f5f5; border-radius: 4px; font-size: 14px; color: #999; cursor: not-allowed;">下一页</span>
                      <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    
                    <div style="text-align: center; margin-top: 20px; color: #999; font-size: 14px;">
                      共 <?php echo $totalItems; ?> 条新闻，每页 <?php echo $itemsPerPage; ?> 条
                    </div>
                    <?php endif; ?>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
<?php include 'scripts.php'; ?>
  </body>
</html>