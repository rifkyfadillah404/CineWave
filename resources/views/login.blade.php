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
            <h2>Login</h2>
            <form>
                <div class="input-group">
                    <input type="text" id="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password" required>
                </div>
                <a href="/index" button type="submit" class="login-btn">Login</a></button>
                <div class="options">
                    <a href="/singin">Don't Have Account?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
