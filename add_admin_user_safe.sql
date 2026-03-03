-- 新增管理员账号（安全版本）
-- 请在 DMS SQL Console 中执行此 SQL
-- 如果用户不存在，执行 INSERT；如果存在，执行 UPDATE

-- 方法：先执行 UPDATE，如果影响行数为 0，再执行 INSERT

-- 步骤 1：尝试更新现有用户
UPDATE `admin_users` 
SET `password` = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    `role` = 'admin',
    `status` = 1,
    `updated_at` = NOW()
WHERE `username` = 'huasaiinfo';

-- 步骤 2：检查是否有影响行数
-- 如果 UPDATE 影响了 0 行，说明用户不存在，需要执行 INSERT
-- 请手动检查 UPDATE 的影响行数，如果为 0，则执行下面的 INSERT：

-- INSERT INTO `admin_users` (`username`, `password`, `name`, `email`, `role`, `status`, `created_at`, `updated_at`)
-- VALUES ('huasaiinfo', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '超级管理员', 'admin@huasaiinfo.com', 'admin', 1, NOW(), NOW());
