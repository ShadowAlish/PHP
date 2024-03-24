<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CINETWIIN</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #0f0c29, #302b63, #24243e); /* More dynamic gradient */
            color: #ffffff;
            text-align: center;
            background-attachment: fixed; /* Ensures gradient stays static during scroll */
        }

        .nav-links {
            text-align: right;
            padding: 20px 30px;
            background: none;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 15px;
            font-size: 1.1rem;
            background-color: #6C63FF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .nav-links a:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .header, .features {
            padding: 40px 20px;
            background: transparent;
        }

        .header h1, .features h2 {
            font-size: 2.5rem;
            color: #E0E0E0;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Adds depth to text */
        }

        .header p, .features p {
            font-size: 1.2rem;
            color: #A5A5A5;
            margin-bottom: 15px;
        }

        .tagline {
            font-size: 1.4rem;
            color: #F8F8F8;
            margin: 20px auto;
            max-width: 600px; /* Ensures line length is manageable */
            line-height: 1.6;
        }

        .features .feature-item {
            background: rgba(255, 255, 255, 0.1); /* Slight background for feature items */
            margin: 20px auto;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Soft shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
            width: 80%;
            max-width: 500px;
        }

        .features .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
        }

    </style>
</head>
<body>

<div class="nav-links">
    <a href="signup.php">Sign Up</a>
    <a href="loginpage.php">Login</a>
</div>

<div class="header">
    <h1>Welcome to CINETWIIN</h1>
    <p>Your ultimate watch party platform</p>
    <div class="tagline">CINETWIIN - The Ultimate Paradise for Party Watchers. Dive into a new era of watching together.</div>
</div>

<div class="features">
    <h2>Our Features</h2>
    <div class="feature-item"><p>🎥 Real-time streaming for movies, TV shows, and web series with friends.</p></div>
    <div class="feature-item"><p>👥 Private watch parties with integrated chat, bringing everyone closer.</p></div>
    <div class="feature-item"><p>🔗 Easy link sharing for instant access to the party.</p></div>
    <div class="feature-item"><p>🕒 Synchronized playback for a seamless viewing experience.</p></div>
    <div class="feature-item"><p>🖥️ High-quality video and audio, supporting a wide range of content.</p></div>
</div>

<div class="footer">
    <!-- Consider adding a footer with copyright notice, links to social media, etc. -->
</div>

</body>
</html>