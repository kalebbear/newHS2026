<?php
/**
 * PHP转静态HTML构建脚本
 * 将所有PHP页面转换为静态HTML文件
 */

$baseUrl = 'http://localhost/HS/';
$pages = [
    'index.php' => 'index.html',
    'about.php' => 'about.html',
    'team.php' => 'team.html',
    'customer.php' => 'customer.html',
    'honor.php' => 'honor.html',
    'cmmi.php' => 'cmmi.html',
    'CMMIImplementation.php' => 'CMMIImplementation.html',
    'cmmijs.php' => 'cmmijs.html',
    'cmmi-docs.php' => 'cmmi-docs.html',
    'case-study.php' => 'case-study.html',
    'aspice.php' => 'aspice.html',
    'whataspice.php' => 'whataspice.html',
    'whataspicerz.php' => 'whataspicerz.html',
    'carryaspicerz.php' => 'carryaspicerz.html',
    'aspice-docs.php' => 'aspice-docs.html',
    'process-consulting.php' => 'process-consulting.html',
    'ai-empowerment.php' => 'ai-empowerment.html',
    'sslc.php' => 'sslc.html',
    'training.php' => 'training.html',
    'standards.php' => 'standards.html',
    'best-practices.php' => 'best-practices.html',
    'news.php' => 'news.html',
    'hstools.php' => 'hstools.html',
    'hsdocs.php' => 'hsdocs.html',
    'rd-docs.php' => 'rd-docs.html',
    'contact.php' => 'contact.html',
    'faq.php' => 'faq.html',
    'sitemap.php' => 'sitemap.html',
];

$converted = 0;
$failed = 0;

echo "开始转换PHP文件为静态HTML...\n\n";

foreach ($pages as $phpFile => $htmlFile) {
    $url = $baseUrl . $phpFile;
    $outputFile = __DIR__ . '/' . $htmlFile;
    
    echo "转换: $phpFile -> $htmlFile ... ";
    
    // 使用curl获取页面内容
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $content = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($content !== false && $httpCode == 200) {
        // 修改链接：将.php改为.html
        $content = str_replace('.php"', '.html"', $content);
        $content = str_replace('.php\'', '.html\'', $content);
        $content = str_replace('.php>', '.html>', $content);
        
        // 修改href="index.html"为href="./"或href="/"
        $content = str_replace('href="index.html"', 'href="./"', $content);
        
        // 保存文件
        if (file_put_contents($outputFile, $content)) {
            echo "✓ 成功\n";
            $converted++;
        } else {
            echo "✗ 保存失败\n";
            $failed++;
        }
    } else {
        echo "✗ 获取失败 (HTTP $httpCode)\n";
        $failed++;
    }
}

echo "\n================================\n";
echo "转换完成！\n";
echo "成功: $converted 个文件\n";
echo "失败: $failed 个文件\n";
echo "================================\n";

if ($converted > 0) {
    echo "\n静态文件已生成，可以部署到任何静态托管服务：\n";
    echo "- Vercel\n";
    echo "- GitHub Pages\n";
    echo "- Netlify\n";
    echo "- 阿里云OSS\n";
    echo "- 腾讯云COS\n";
}
?>