<?php
require_once 'check_admin.php';
require_once '../db_config.php';

// 只有管理员可以添加新闻
checkEditPermission();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $summary = trim($_POST['summary'] ?? '');
    $content = $_POST['content'] ?? '';
    $category = trim($_POST['category'] ?? '');
    $author = trim($_POST['author'] ?? '管理员');
    $status = intval($_POST['status'] ?? 1);
    
    if (empty($title)) {
        $error = '请输入新闻标题';
    } elseif (empty($content)) {
        $error = '请输入新闻内容';
    } else {
        try {
            $sql = "INSERT INTO news (title, summary, content, category, author, status, published_at, created_at, updated_at) 
                    VALUES (:title, :summary, :content, :category, :author, :status, NOW(), NOW(), NOW())";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':summary' => $summary,
                ':content' => $content,
                ':category' => $category,
                ':author' => $author,
                ':status' => $status
            ]);
            header('Location: news_list.php?msg=added');
            exit;
        } catch (PDOException $e) {
            $error = '添加失败：' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加新闻 - 华赛信息咨询</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" type="image/png" href="favicon.svg" />
    <!-- 引入 Quill 富文本编辑器 -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.min.js"></script>
    <style>
        .form-card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            max-width: 900px;
            padding: 30px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-primary);
        }
        .form-group label .required {
            color: var(--danger-color);
            margin-left: 4px;
        }
        .form-group input[type="text"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            border-radius: var(--radius-md);
            font-size: 14px;
            transition: var(--transition);
            font-family: inherit;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(74, 111, 165, 0.1);
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .form-row .form-group {
            margin-bottom: 0;
        }
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <?php include 'sidebar.php'; ?>
        
        <main class="main-content">
            <div class="page-header">
                <h1>添加新闻</h1>
                <div class="user-actions">
                    <span>欢迎，<?php echo $_SESSION['admin_username']; ?></span>
                    <a href="logout.php" class="btn btn-danger">退出登录</a>
                </div>
            </div>
            
            <?php if ($error): ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <div class="form-card">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="title">新闻标题 *</label>
                        <input type="text" id="title" name="title" required placeholder="请输入新闻标题">
                    </div>
                    
                    <div class="form-group">
                        <label for="summary">新闻摘要</label>
                        <textarea id="summary" name="summary" placeholder="请输入新闻摘要（可选）"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="content">新闻内容 *</label>
                        <div id="editor-container" style="height: 300px; border: 1px solid #ddd; border-radius: 4px;"></div>
                        <textarea id="content" name="content" style="display: none;"></textarea>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="category">分类</label>
                            <select id="category" name="category">
                                <option value="公司动态">公司动态</option>
                                <option value="行业资讯">行业资讯</option>
                                <option value="荣誉资质">荣誉资质</option>
                                <option value="活动会议">活动会议</option>
                                <option value="成功案例">成功案例</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="author">作者</label>
                            <input type="text" id="author" name="author" value="管理员" placeholder="请输入作者">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="status">发布状态</label>
                            <select id="status" name="status">
                                <option value="1">已发布</option>
                                <option value="0">草稿</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">保存新闻</button>
                        <a href="news_list.php" class="btn btn-secondary">返回列表</a>
                    </div>
                </form>
            </div>
        </main>
    </div>
    
    <script>
        // 初始化 Quill 富文本编辑器
        const quill = new Quill('#editor-container', {
            theme: 'snow',
            placeholder: '请输入新闻内容...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });
        
        // 表单提交时同步编辑器内容到textarea
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('content').value = quill.root.innerHTML;
        });
    </script>
</body>
</html>