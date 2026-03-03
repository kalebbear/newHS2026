<!DOCTYPE html>
<html lang="zh-CN">
<?php $pageTitle = '网站地图'; ?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <body class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace">
    <div id="app">
      <?php include 'header.php'; ?>
      <main id="main" class="main">
        <?php
        ;
        $breadcrumbItems = [
            ['title' => '首页', 'url' => 'index.php'],
            ['title' => '网站地图', 'url' => null]
        ];
        include 'pageheader.php';
        ?>
        <div class="m-ctypes">
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="sitemap-wrapper" style="max-width: 1000px; margin: 0 auto; padding: 40px 0;">
                    
                    <!-- 关于华赛 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">关于华赛</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="about.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛简介</a></li>
                        <li><a href="team.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 咨询团队</a></li>
                        <li><a href="customer.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛客户</a></li>
                        <li><a href="honor.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛荣耀</a></li>
                      </ul>
                    </div>

                    <!-- CMMI服务 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">CMMI服务</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="cmmi.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> CMMI评估认证</a></li>
                        <li><a href="CMMIImplementation.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> CMMI实施</a></li>
                        <li><a href="cmmijs.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> CMMI介绍</a></li>
                        <li><a href="cmmi-docs.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> CMMI文档</a></li>
                        <li><a href="case-study.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 典型案例</a></li>
                      </ul>
                    </div>

                    <!-- ASPICE服务 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">ASPICE服务</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="aspice.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> ASPICE评估认证</a></li>
                        <li><a href="whataspice.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 什么是ASPICE</a></li>
                        <li><a href="whataspicerz.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> ASPICE认证介绍</a></li>
                        <li><a href="carryaspicerz.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> ASPICE认证流程</a></li>
                        <li><a href="aspice-docs.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> ASPICE文档</a></li>
                      </ul>
                    </div>

                    <!-- 其他服务 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">其他服务</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="process-consulting.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 流程落地咨询</a></li>
                        <li><a href="ai-empowerment.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> AI赋能</a></li>
                        <li><a href="sslc.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 网络安全与功能安全</a></li>
                        <li><a href="training.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 培训课程</a></li>
                        <li><a href="standards.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 行业标准</a></li>
                        <li><a href="best-practices.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 最佳实践</a></li>
                      </ul>
                    </div>

                    <!-- 资讯中心 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">资讯中心</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="news.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛新闻</a></li>
                        <li><a href="hstools.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛工具</a></li>
                        <li><a href="hsdocs.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 华赛文库</a></li>
                        <li><a href="rd-docs.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 研发文档</a></li>
                      </ul>
                    </div>

                    <!-- 联系我们 -->
                    <div class="sitemap-section" style="margin-bottom: 40px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">
                        <span class="red">联系我们</span>
                      </h2>
                      <ul class="sitemap-list" style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                        <li><a href="contact.php" style="color: #666; text-decoration: none; display: flex; align-items: center; gap: 8px;"><span style="color: #4a6fa5;">›</span> 联系我们</a></li>
                      </ul>
                    </div>

                    <!-- 快速导航 -->
                    <div class="sitemap-section" style="margin-bottom: 40px; padding: 30px; background: #f8f9fa; border-radius: 8px;">
                      <h2 class="sitemap-title" style="font-size: 24px; color: #333; margin-bottom: 20px;">
                        <span class="red">快速导航</span>
                      </h2>
                      <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                        <a href="index.php" style="display: inline-block; padding: 10px 20px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">首页</a>
                        <a href="about.php" style="display: inline-block; padding: 10px 20px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">关于华赛</a>
                        <a href="cmmi.php" style="display: inline-block; padding: 10px 20px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">CMMI</a>
                        <a href="aspice.php" style="display: inline-block; padding: 10px 20px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">ASPICE</a>
                        <a href="contact.php" style="display: inline-block; padding: 10px 20px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">联系我们</a>
                      </div>
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