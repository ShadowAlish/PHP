<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - CINETWIIN</title>
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

        .forgot-password-container {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
            width: 320px;
            position: relative;
            padding-bottom: 60px; /* Increased padding for spacing */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .input-container {
            margin-bottom: 20px;
            margin-top: 20px; /* Added space between text and input box */
        }

        .input-container input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #111;
            color: #fff;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.6);
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
            color: #522785; /* Link color */
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Adding space between texts */
        .spacing {
            display: block; /* This makes it take up the full width, creating a line break */
            margin-bottom: 10px; /* Adjust this value to increase/decrease the space */
        }
    </style>
</head>
<body>

<div class="forgot-password-container">
    <h2>Trouble Logging In?</h2>
    <p>Enter your email and we'll send you a link to get back into your account.</p>
    <form action="#" method="POST">
        <div class="input-container">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <input type="submit" value="Send Link">
    </form>
    <div class="form-footer">
        <span class="spacing">Remembered your password?</span>
        <a href="loginpage.php">Login here</a>
    </div>
</div>

</body>
</html>