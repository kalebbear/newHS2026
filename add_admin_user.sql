-- 新增管理员账号
-- 请在 DMS SQL Console 中执行此 SQL

-- 先尝试更新，如果用户已存在则更新密码和权限
UPDATE `admin_users` 
SET `password` = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    `role` = 'admin',
    `status` = 1,
    `updated_at` = NOW()
WHERE `username` = 'huasaiinfo';

-- 如果更新没有影响行数（用户不存在），则插入新用户
-- 注意：如果上面 UPDATE 影响了 0 行，再执行下面的 INSERT
INSERT INTO `admin_users` (`username`, `password`, `name`, `email`, `role`, `status`, `created_at`, `updated_at`)
VALUES ('huasaiinfo', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '研发管理之道', 'tony@huasaiinfo.com', 'admin', 1, NOW(), NOW());
