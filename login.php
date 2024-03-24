<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CINETWIIN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #001d3d 0%, #3a1c71 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #ffffff;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
            width: 320px;
            position: relative;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-container input[type="email"],
        .input-container input[type="password"] {
            width: 100%;
            padding: 10px;
            padding-right: 60px; /* Make room for the show/hide button */
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #111;
            color: #fff;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.6);
        }

        .toggle-password {
            cursor: pointer;
            color: #ffffff;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 12px;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #522785;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3a1c71;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            text-align: center;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to CINETWIIN</h2>
    <form action="#" method="POST">
        <div class="input-container">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Password" id="password" required>
            <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">SHOW</button>
        </div>
        <input type="submit" value="Login">
        <a href="forgotpassword.php" class="forgot-password">Forgot Password?</a>
    </form>
    <div class="form-footer">
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        let passwordInput = document.getElementById('password');
        let toggleButton = document.querySelector('.toggle-password');
        if (passwordInput.getAttribute('type') === 'password') {
            passwordInput.setAttribute('type', 'text');
            toggleButton.textContent = 'HIDE';
        } else {
            passwordInput.setAttribute('type', 'password');
            toggleButton.textContent = 'SHOW';
        }
    }
</script>

</body>
</html>