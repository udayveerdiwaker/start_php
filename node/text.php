<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Gym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .hero {
            background: url('gym.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin: 0;
        }
        .hero p {
            font-size: 1.2em;
            margin: 20px 0;
        }
        .container {
            padding: 20px;
        }
        .responsive {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .responsive div {
            flex: 1;
            min-width: 300px;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Fitness Gym</div>
        <nav>
            <a href="#about">About</a>
            <a href="#classes">Classes</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="hero">
        <h1>Welcome to Fitness Gym</h1>
        <p>Your fitness journey starts here. Join us today!</p>
    </div>

    <div id="about" class="container">
        <h2>About Us</h2>
        <p>Fitness Gym is a community of passionate individuals striving for a healthier and stronger lifestyle. Our state-of-the-art facilities and expert trainers are here to guide you every step of the way.</p>
    </div>

    <div id="classes" class="container responsive">
        <div>
            <h3>Yoga Classes</h3>
            <p>Relax and rejuvenate with our expert-led yoga sessions.</p>
        </div>
        <div>
            <h3>HIIT Workouts</h3>
            <p>High-Intensity Interval Training for maximum calorie burn.</p>
        </div>
        <div>
            <h3>Personal Training</h3>
            <p>One-on-one sessions tailored to your fitness goals.</p>
        </div>
    </div>

    <div id="contact" class="container">
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <button type="submit">Send</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Fitness Gym. All Rights Reserved.</p>
    </footer>
</body>
</html>
