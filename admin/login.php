<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录 - 华赛信息咨询</title>
    <link rel="icon" type="image/png" href="favicon.svg" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #4a6fa5 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.3;
        }
        .login-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 25px 80px rgba(0,0,0,0.3), 0 0 0 1px rgba(255,255,255,0.2);
            animation: slideUp 0.6s ease-out;
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }
        .logo-container {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #4a6fa5 0%, #6b8cbc 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(196, 30, 58, 0.3);
        }
        .logo-container svg {
            width: 40px;
            height: 40px;
            fill: white;
        }
        .login-header h1 {
            color: #2c3e50;
            font-size: 26px;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .login-header p {
            color: #7f8c8d;
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #34495e;
            font-size: 14px;
            font-weight: 500;
        }
        .input-wrapper {
            position: relative;
        }
        .input-wrapper svg {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            fill: #95a5a6;
            transition: fill 0.3s;
        }
        .form-group input {
            width: 100%;
            padding: 14px 15px 14px 50px;
            border: 2px solid #e8ecf0;
            border-radius: 12px;
            font-size: 15px;
            transition: all 0.3s;
            background: #f8f9fa;
        }
        .form-group input:focus {
            outline: none;
            border-color: #4a6fa5;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(74, 111, 165, 0.1);
        }
        .form-group input:focus + svg,
        .input-wrapper:focus-within svg {
            fill: #4a6fa5;
        }
        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #4a6fa5 0%, #3d5d8a 100%);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(74, 111, 165, 0.4);
            margin-top: 10px;
        }
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(74, 111, 165, 0.5);
        }
        .login-btn:active {
            transform: translateY(0);
        }
        .error-message {
            background: linear-gradient(135deg, #fee 0%, #ffeaea 100%);
            color: #c33;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 25px;
            font-size: 14px;
            display: none;
            border-left: 4px solid #4a6fa5;
            animation: shake 0.5s ease-in-out;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        .error-message.show {
            display: block;
        }
        .footer-text {
            text-align: center;
            margin-top: 25px;
            color: rgba(255,255,255,0.6);
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-header">
                <div class="logo-container">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <h1>华赛信息咨询</h1>
                <p>后台管理系统</p>
            </div>
            
            <div class="error-message" id="errorMsg"></div>
            
            <form id="loginForm" method="POST" action="login_process.php">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/></svg>
                        <input type="text" id="username" name="username" required placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24"><path d="M19 11H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2zm-7-7a5 5 0 0 1 5 5v2H7V9a5 5 0 0 1 5-5z"/></svg>
                        <input type="password" id="password" name="password" required placeholder="请输入密码">
                    </div>
                </div>
                <button type="submit" class="login-btn">登 录</button>
            </form>
        </div>
        <p class="footer-text">© 2024 深圳华赛信息咨询有限公司 版权所有</p>
    </div>
    
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const error = urlParams.get('error');
        if (error) {
            const errorMsg = document.getElementById('errorMsg');
            errorMsg.textContent = decodeURIComponent(error);
            errorMsg.classList.add('show');
        }
    </script>
</body>
</html>
