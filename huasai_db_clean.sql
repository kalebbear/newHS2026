-- 清理后的 SQL 文件（适用于 DMS）
-- 删除所有 DMS 不支持的语句

-- 设置字符集
SET NAMES utf8mb4;

-- 创建表 admin_users
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` enum('admin','editor') DEFAULT 'editor',
  `status` tinyint(1) DEFAULT 1,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 插入 admin_users 数据
INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `email`, `role`, `status`, `last_login`, `last_ip`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Qxb43orTbowwglbUsjYoYOgkYKEXc3d404YxnXKDKWBgNZweBvLLG', '研发管理之道', 'tony@huasaiinfo.com', 'admin', 1, '2026-02-02 15:40:56', '::1', '2026-02-02 15:40:47', '2026-02-27 16:27:46'),
(2, 'xiongkuang', '$2y$10$.9QJIFFCVTspGL7r/D.Sh.miP99b4uhDPBvAJqjUe/NR7jboAWkg6', '熊', NULL, '', 1, NULL, NULL, '2026-02-23 13:13:55', '2026-02-27 16:28:00');

-- 创建表 contact_messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','replied') DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 创建表 news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `category` varchar(50) DEFAULT '行业动态',
  `cover_image` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `views` int(10) UNSIGNED DEFAULT 0,
  `is_top` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `published_at` datetime DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_status` (`status`),
  KEY `idx_category` (`category`),
  KEY `idx_created_at` (`created_at`),
  KEY `idx_is_top` (`is_top`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 插入 news 数据
INSERT INTO `news` (`id`, `title`, `summary`, `content`, `category`, `cover_image`, `author`, `views`, `is_top`, `status`, `published_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, '测试新闻', '新闻摘要', '<h3>阿萨德</h3><p><br></p><p><br></p><p>阿萨德爱上打扫打扫爱上</p><p><br></p><p><br></p><p><br></p><p>红红火火恍恍惚惚哈哈哈哈哈哈哈哈哈哈哈哈</p><p>阿萨德</p>', '公司动态', NULL, '管理员', 1, 0, 1, '2026-02-25 18:32:20', NULL, NULL, '2026-02-25 18:32:20', '2026-02-25 18:32:25');

-- 创建表 news_categories
CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `slug` varchar(50) NOT NULL COMMENT '分类标识',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 插入 news_categories 数据
INSERT INTO `news_categories` (`id`, `name`, `slug`, `created_at`) VALUES
(1, '公司动态', 'company', '2026-02-22 15:38:18'),
(2, '行业资讯', 'industry', '2026-02-22 15:38:18'),
(3, '荣誉资质', 'honor', '2026-02-22 15:38:18'),
(4, '活动会议', 'activity', '2026-02-22 15:38:18');
