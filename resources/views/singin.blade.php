<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Sing-In</h2>
            <form>
                <div class="input-group">
                    <input type="email" id="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="text" id="username" placeholder="username" required>
                </div>
                <a href="/index" button type="submit" class="login-btn">Sing-In</a></button>
                <div class="options">
                    <a href="/login">Have Account?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
