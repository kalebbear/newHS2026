<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Page Title';
$breadcrumbItems = isset($breadcrumbItems) ? $breadcrumbItems : [
    ['title' => 'Home', 'url' => 'index.html'],
    ['title' => $pageTitle, 'url' => null]
];
?>
        <section class="m-pageheader">
          <div class="m-pageheader__main">
            <div class="container">
              <div class="row">
                <div class="m-pageheader__innerwrapper">
                  <div class="m-pageheader__inner">
                    <div class="m-pageheader__content">
                      <div class="m-pageheader__title"><h1><?php echo htmlspecialchars($pageTitle); ?></h1></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="m-pageheader__breadcrumb">
            <div class="container">
              <div class="row">
                <div class="m-breadcrumb__inner">
                  <div class="m-breadcrumb">
                    <span>
<?php foreach ($breadcrumbItems as $index => $item): ?>
                      <span>
<?php if ($item['url']): ?>
                        <a href="<?php echo htmlspecialchars($item['url']); ?>"><?php echo htmlspecialchars($item['title']); ?></a>
<?php else: ?>
                        <span class="breadcrumb_last" aria-current="page"><?php echo htmlspecialchars($item['title']); ?></span>
<?php endif; ?>
                      </span>
<?php endforeach; ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
