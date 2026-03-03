<?php
// 先获取新闻数据以设置页面标题
require_once 'db_config.php';

// 获取新闻ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    header('Location: news.php');
    exit;
}

// 获取新闻详情
$sql = "SELECT id, title, content, summary, category, author, views, published_at, created_at FROM news WHERE id = :id AND status = 1";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$news = $stmt->fetch();

if (!$news) {
    header('Location: news.php');
    exit;
}

// 更新浏览次数
$updateSql = "UPDATE news SET views = views + 1 WHERE id = :id";
$updateStmt = $pdo->prepare($updateSql);
$updateStmt->bindValue(':id', $id, PDO::PARAM_INT);
$updateStmt->execute();

// 设置页面标题和SEO信息
$pageTitle = '新闻详情';
$pageDescription = !empty($news['summary']) ? $news['summary'] : mb_substr(strip_tags($news['content']), 0, 150) . '...';
$pageKeywords = $news['category'] . ',华赛新闻,' . $news['title'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <body
    class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => '公司资讯', 'url' => 'products.html'],
    ['title' => '华赛新闻', 'url' => 'news.php'],
    ['title' => $news['title'], 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  
                  <div style="max-width: 900px; margin: 0 auto;">
                    
                    <a href="news.php" style="display: inline-flex; align-items: center; color: #4a6fa5; text-decoration: none; margin-bottom: 30px; font-size: 14px;">
                      <span style="margin-right: 5px;">←</span> 返回新闻列表
                    </a>
                    
                    <article style="background: #fff; padding: 40px; border-radius: 8px; border: 1px solid #e0e0e0;">
                      
                      <header style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                        <h1 style="font-size: 28px; font-weight: 600; color: #333; margin-bottom: 20px; line-height: 1.4;">
                          <?php echo htmlspecialchars($news['title']); ?>
                        </h1>
                        
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; color: #999; font-size: 14px;">
                          <span>发布时间：<?php echo $news['published_at']; ?></span>
                          <?php if (!empty($news['author'])): ?>
                          <span>作者：<?php echo htmlspecialchars($news['author']); ?></span>
                          <?php endif; ?>
                          <?php if (!empty($news['category'])): ?>
                          <span>分类：<?php echo htmlspecialchars($news['category']); ?></span>
                          <?php endif; ?>
                          <span>浏览：<?php echo $news['views'] + 1; ?> 次</span>
                        </div>
                      </header>
                      
                      <?php if (!empty($news['summary'])): ?>
                      <div style="background: #f5f5f5; padding: 20px; border-radius: 6px; margin-bottom: 30px; border-left: 4px solid #4a6fa5;">
                        <p style="margin: 0; color: #666; font-size: 15px; line-height: 1.8;">
                          <strong>摘要：</strong><?php echo htmlspecialchars($news['summary']); ?>
                        </p>
                      </div>
                      <?php endif; ?>
                      
                      <div style="color: #333; font-size: 16px; line-height: 1.8;">
                        <?php echo $news['content']; ?>
                      </div>
                      
                    </article>
                    
                    <div style="margin-top: 40px; text-align: center;">
                      <a href="news.php" style="display: inline-block; padding: 12px 30px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">
                        返回新闻列表
                      </a>
                    </div>
                    
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
