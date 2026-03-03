-- 仅包含数据的 SQL 文件（适用于 DMS）
-- 注意：使用此文件前，请先在 DMS 中手动创建表结构

-- admin_users 数据
INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `email`, `role`, `status`, `last_login`, `last_ip`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Qxb43orTbowwglbUsjYoYOgkYKEXc3d404YxnXKDKWBgNZweBvLLG', '研发管理之道', 'tony@huasaiinfo.com', 'admin', 1, '2026-02-02 15:40:56', '::1', '2026-02-02 15:40:47', '2026-02-27 16:27:46'),
(2, 'xiongkuang', '$2y$10$.9QJIFFCVTspGL7r/D.Sh.miP99b4uhDPBvAJqjUe/NR7jboAWkg6', '熊', NULL, '', 1, NULL, NULL, '2026-02-23 13:13:55', '2026-02-27 16:28:00');

-- news 数据
INSERT INTO `news` (`id`, `title`, `summary`, `content`, `category`, `cover_image`, `author`, `views`, `is_top`, `status`, `published_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, '测试新闻', '新闻摘要', '<h3>阿萨德</h3><p><br></p><p><br></p><p>阿萨德爱上打扫打扫爱上</p><p><br></p><p><br></p><p><br></p><p>红红火火恍恍惚惚哈哈哈哈哈哈哈哈哈哈哈哈</p><p>阿萨德</p>', '公司动态', NULL, '管理员', 1, 0, 1, '2026-02-25 18:32:20', NULL, NULL, '2026-02-25 18:32:20', '2026-02-25 18:32:25');

-- news_categories 数据
INSERT INTO `news_categories` (`id`, `name`, `slug`, `created_at`) VALUES
(1, '公司动态', 'company', '2026-02-22 15:38:18'),
(2, '行业资讯', 'industry', '2026-02-22 15:38:18'),
(3, '荣誉资质', 'honor', '2026-02-22 15:38:18'),
(4, '活动会议', 'activity', '2026-02-22 15:38:18');
