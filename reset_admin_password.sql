-- 重置 admin 用户密码为 admin123
-- 请在 DMS SQL Console 中执行此 SQL

UPDATE `admin_users` 
SET `password` = '$2y$10$Qxb43orTbowwglbUsjYoYOgkYKEXc3d404YxnXKDKWBgNZweBvLLG' 
WHERE `username` = 'admin';

-- 如果上面的语句没有影响行数，说明 admin 用户不存在，则创建新用户
INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `email`, `role`, `status`, `created_at`, `updated_at`)
SELECT 1, 'admin', '$2y$10$Qxb43orTbowwglbUsjYoYOgkYKEXc3d404YxnXKDKWBgNZweBvLLG', '管理员', 'admin@huasaiinfo.com', 'admin', 1, NOW(), NOW()
WHERE NOT EXISTS (SELECT 1 FROM `admin_users` WHERE `username` = 'admin');
