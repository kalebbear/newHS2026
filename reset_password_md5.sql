-- 重置密码为 MD5 格式（兼容所有 PHP 版本）
-- 密码: HS@612a2026
-- MD5: 3e0b6c2c8f5e9d7a1b4c8f2e6d5a9b3c

UPDATE `admin_users` 
SET `password` = MD5('HS@612a2026')
WHERE `username` = 'huasaiinfo';

-- 如果没有影响，插入新用户
INSERT INTO `admin_users` (`username`, `password`, `name`, `email`, `role`, `status`, `created_at`, `updated_at`)
VALUES ('huasaiinfo', MD5('HS@612a2026'), '超级管理员', 'admin@huasaiinfo.com', 'admin', 1, NOW(), NOW());
