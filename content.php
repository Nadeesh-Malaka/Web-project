<?php


require_once(__DIR__  . "/config/config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Subject Content Page</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
            background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
        }

        *:before,
        *:after {
            box-sizing: inherit;
        }

        .about-section {
            padding: 100px;
            text-align: left;
            background-color: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
            color: white;
        }

        nav {
            background-color: #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin-top: -10px;
            margin-left: -10px;
            margin-right: -10px;
        }

        .logo {
            font-size: 24px;
            color: #fff;
            flex-grow: 1;
            text-align: left;
            color: #dee10c;
        }

        .menu-icon {
            font-size: 24px;
            cursor: pointer;
            display: none;
        }

        .menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .menu li {
            margin-right: 20px;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .menu li a:hover {
            color: #ff6600;
        }

        footer p {
            background-color: black;
            color: white;
            text-align: center;
            margin-top: 100px;
            margin-bottom: -100px;
            margin-left: -10px;
            margin-right: -10px;
            padding-bottom: 14px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-family: 'Helvetica', sans-serif;
            font-size: 36px;
        }

        h3 {
            font-size: 24px;
            color: #555;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 10px;
        }

        .subject-streams {
            display: flex;
            justify-content: center;
            /* Align cards to the center */
            margin-top: 20px;
            overflow: hidden;
            /* Hide horizontal overflow */
        }

        .subject-stream-card {
            flex-shrink: 0;
            flex-basis: 0;
            flex-grow: 1;
            /* Share the available space */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            padding-bottom: 80px;
            text-align: center;
            cursor: pointer;
            background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
            transition: transform 0.3s ease;
            margin-right: 10px;
            /* Add some space between cards */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .subject-stream-card:last-child {
            margin-right: 0;
            /* Remove right margin from last card */
        }

        .subject-stream-card:hover {
            background-color: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
            transform: translateY(-5px);
        }

        .subject-stream-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .subject-stream-card p {
            margin-bottom: 0;
            color: #777;
            font-size: 16px;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
        }

        .logout{
      background-color: #007bff;
      padding: 10px;
    }
    </style>

</head>

<body>
    <nav>
        <div class="logo">Master Education</div>
        <ul class="menu">
        <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="team.php">Our Team</a></li>
      <li><a href="h&c.php">Help & Contact</a></li>
      <li><a href="privacy.php">privacy & policy </a></li>
      <?php if(isset($_SESSION['id'])) { ?>
        <li><a href="<?php echo BASEURL ?> /profile.php">My Profile </a></li>
          <li><a href="<?php echo BASEURL ?> /logout.php"  class="logout">Log out</a></li>
      <?php } ?>
      <?php if(!isset($_SESSION['id'])){ ?>
      <li><a href="<?php echo BASEURL ?>/login.php" >Login</a></li>
      <li><a href="<?php echo BASEURL ?>/signup.php">Register</a></li>
      <?php } ?>
        </ul>
    </nav>
    <h1>Subject Content Page</h1>
    <div class="subject-streams">
        <a href="video.html" target="_blank">
            <!-- Subject Stream 1 - Video -->
            <div class="subject-stream-card">
                <img src="video.png" alt="Video">
                <h3>Video</h3>
                <p>Explore engaging educational videos related to your subjects.</p>
        </a>
    </div>
    <!-- Subject Stream 2 - Notes -->
    <div class="subject-stream-card">
        <a href="https://drive.google.com/drive/folders/1bxuHzq7lPMQusn_cV9eg_EuEHiLnRASK?usp=sharing" target="_blank">
            <img src="short.png" alt="Notes">
            <h3>Notes</h3>
            <p>Access comprehensive and concise notes to help you study.</p>
        </a>
    </div>
    <!-- Subject Stream 3 - Quizzes -->
    <div class="subject-stream-card">
        <a href="quiz.html " target="_blank">
            <img src="quiz.png" alt="Quiz">
            <h3>Quizzes</h3>
            <p>Test your knowledge with interactive quizzes and assessments.</p>
        </a>
    </div>
    </div>
    <footer>
        <p>&copy; Master Education. All rights reserved.</p>
    </footer>
</body>

</html>