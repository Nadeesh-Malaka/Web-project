<?php
require_once(__DIR__ . "/config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <title>About </title>
    <style>
        * {
            margin: 0;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
        }

        .container {
            text-align: center;
            min-width: 300px;

        }

        nav {
            background-color: #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            margin-left: -113px;
            margin-right: -111px;
        }

        .logo {
            font-size: 24px;
            color: #dee10c;
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

        .about-section {
            padding: 50px 0;
        }

        h1 {
            font-size: 46px;
            margin-bottom: 20px;
            text-align: center;
            color: red;
            text-decoration: underline;

            font-weight: 900;
        }

        p {
            font-size: 28px;
            line-height: 1.6;
            text-align:justify;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            align-items: center;
            margin-top: 20px;
            margin-left: -113px;
            margin-right: -111px;
            margin-bottom: -20px;
        }
        footer h3{
            font-size:25px;

        }

        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .menu li {

                margin-bottom: 10px;
            }

            nav {
                display: flex;
                margin: 0;
                padding: 0;
                width: 100%;

            }

            nav ul {
                display: flex;
            }

            nav ul li {
                display: flex;
            }
        }

        .link a {
            text-align: center;
            font-size: 25px;
            text-decoration: none;

        }

        .lg {
            background-color: blue;
            padding: 10px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 2.5px;
            right: 10px;
            z-index: 99;
            font-size: 15px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 12px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #13017a;
            color: rgb(255, 183, 0);
        }

        .logout{
      background-color: #007bff;
      padding: 10px;
    }
    </style>
    <title>About</title>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"
            aria-hidden="true"></i></button>

    <div class="container">
        <nav>
            <div class="logo">Master Education</div>
            <ul class="menu">
            <li><a href="index.php">Home</a></li>
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
        <div class="about-section">
            <h1>About Us</h1>
            <br>
            <p>Welcome to Master Education, where we firmly believe that education is the cornerstone of personal and
                professional growth. Our unwavering commitment is to provide a transformative platform that empowers
                learners from all walks of life to unlock fresh knowledge, cultivate valuable skills, and unleash their
                true potential. Embracing a vision of accessibility, we're dedicated to making top-notch education a
                reality for everyone, transcending geographical barriers and time limitations. Our ambition is to foster
                a thriving virtual learning community that thrives on active engagement, seamless collaboration, and a
                boundless passion for lifelong learning.</p>
            <br>
            <p>At the heart of our endeavor lies our team of expert instructors, each driven by an unwavering enthusiasm
                for their respective fields. These industry professionals, scholars, and subject matter virtuosos bring
                a fusion of real-world experience and cutting-edge insights to every course. Understanding the diversity
                in learning preferences and the hustle of modern life, we offer a plethora of flexible learning avenues
                to cater to diverse needs. Our courses empower you with the freedom to learn at your own pace, on your
                terms. Through an engaging blend of video lectures, interactive quizzes, assignments, and vibrant
                discussion forums, we craft an enriching and dynamic learning odyssey.</p>
            <br>
            <p>Enrolling in our courses opens the door to a lifelong journey of knowledge. With access to course
                materials for a lifetime, you have the liberty to revisit and reinforce your understanding whenever the
                need arises. Our dedication to perpetual learning echoes through this commitment, ensuring that your
                educational voyage is one without limits. Embark with us on this exhilarating quest for growth, inching
                closer to your aspirations. Explore our diverse range of courses, unearth new horizons, and set forth on
                a transformative path of personal and professional elevation. We're thrilled to be a part of your
                educational voyage and look forward to embarking on this transformative journey together.</p>
        </div>

        <div class="link">
            <a href="team.php">Our Team Members</a>
        </div>
        <footer>
            <h3>&copy; Master Education. All rights reserved.</h3>
        </footer>
    </div>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>