<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header */
        header {
            background-image: url('./image/pic.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            padding: 100px 20px;
            text-align: center;
            color: #fff;
        }
        header h1 {
            font-size: 3em;
            margin: 0;
        }
        header p {
            font-size: 1.2em;
        }
        .cta-button {
            background-color: #0073e6;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }

        /* Features Section */
        .features {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 20px;
            text-align: center;
        }
        .feature {
            flex: 1 1 300px;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .feature img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .feature h3 {
            font-size: 1.5em;
        }

        /* About Section */
        .about {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 20px;
            background-color: #f1f1f1;
        }
        .about-text, .about-image {
            flex: 1 1 300px;
            padding: 20px;
        }
        .about-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
        footer p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .features, .about {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Welcome to Our Skill Recommendation System </h1>
        <p>Your one-stop solution for all your needs.</p>
        <a href="index.php" class="cta-button">Recommend</a>
        <a href="./admin/view.php" class="cta-button">Login As Admin</a>
    </header>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="feature">
            <img src="./image/images.png" alt="Feature 1"> <!-- Replace with your image -->
            <h3>Computing</h3>
            <p>Short description of this amazing feature. Explain how it helps the user.</p>
        </div>
        <div class="feature">
            <img src="./image/pic2.jpg" alt="Feature 2"> <!-- Replace with your image -->
            <h3>Programming</h3>
            <p>Briefly describe another feature and its benefits.</p>
        </div>
        <div class="feature">
            <img src="./image/pic1.jpg" alt="Feature 3"> <!-- Replace with your image -->
            <h3>Graphic Design</h3>
            <p>Give an overview of this feature, focusing on how it stands out.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-text">
            <h2>About Us</h2>
            <p>We are dedicated to bringing you the best service possible. Our mission is to provide top-notch quality and service that you can rely on. Get to know more about our journey and values here.</p>
        </div>
        <div class="about-image">
            <img src="./image/images.jpeg" alt="About Us"> <!-- Replace with your image -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>
