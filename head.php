<?php
// 默认标题和描述
$pageTitle = isset($pageTitle) ? $pageTitle : '深圳华赛信息咨询有限公司';
$pageDescription = isset($pageDescription) ? $pageDescription : '深圳华赛信息咨询有限公司是专业的CMMI、ASPICE认证咨询机构，提供研发管理咨询、培训和评估服务。';
$pageKeywords = isset($pageKeywords) ? $pageKeywords : 'CMMI认证,ASPICE评估,研发管理咨询,深圳华赛,CMMI咨询,ASPICE咨询';
$canonicalUrl = isset($canonicalUrl) ? $canonicalUrl : 'http://www.huasaiinfo.com/' . basename($_SERVER['PHP_SELF']);
?>
    <meta charset="utf-8" />
    <title><?php echo $pageTitle; ?> - 深圳华赛信息咨询有限公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta name="keywords" content="<?php echo $pageKeywords; ?>" />
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    
    <!-- Open Graph -->
    <meta property="og:locale" content="zh_CN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $pageTitle; ?> - 深圳华赛信息咨询有限公司" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>" />
    <meta property="og:site_name" content="深圳华赛信息咨询有限公司" />
    <meta property="og:image" content="http://www.huasaiinfo.com/synspace.com/img/hslogo.png" />
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $pageTitle; ?> - 深圳华赛信息咨询有限公司" />
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>" />
    
    <link
      rel="icon"
      type="image/svg+xml"
      href="synspace.com/img/fav.png"
    />
   
    <link rel="preconnect" href="http://www.huasaiinfo.com/" />
    <link rel="dns-prefetch" href="http://www.huasaiinfo.com/" />
    
    <!-- 移除错误的 hreflang -->
    
    <style>
      /* Logo文字颜色样式 - 与导航菜单保持一致 */
      
      /* 首页 - 白色文字 */
      .home .l-header__logo-text .logo-text-cn,
      .home .l-header__logo-text .logo-text-en {
        color: #fff !important;
      }
      
      /* 非首页 - 灰色文字 */
       .l-header__logo-text .logo-text-cn,
       .l-header__logo-text .logo-text-en {
        color: #ffffff !important;
      }
      
      /* 滚动后 - 深色文字 */
      .js-has-scrolled .l-header__logo-text .logo-text-cn,
      .js-has-scrolled .l-header__logo-text .logo-text-en {
        color: #3a4354 !important;
      }
      
      /* 华赛始终红色 */
      .l-header__logo-text .logo-highlight {
        color: #c41e3a !important;
      }
    </style>
