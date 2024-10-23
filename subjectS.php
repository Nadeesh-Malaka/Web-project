    <?php

    require_once(__DIR__ . "/./config/config.php");

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Subject Page</title>

        <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f1f1f1;
                padding: 20px;
                background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
            }
            
            h1 {
                text-align: center;
                color: #333;
                margin-bottom: 30px;
            }
            
            p {
                font-family: 'Inder', sans-serif;
                line-height: 28px;
                margin-bottom: 15px;
                color: #9fa4a5;
            }
            
            .subject-streams {
                display: flex;
                justify-content: center;
                /* Align cards to the center */
                margin-top: 20px;
                overflow: hidden;
                /* Hide horizontal overflow */
                text-align: center;
            }
            
            .subject-stream-card {
                flex-shrink: 0;
                flex-basis: 0;
                flex-grow: 1;
                /* Share the available space */
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                text-align: center;
                cursor: pointer;
                background-color: #fff;
                transition: transform 0.3s ease;
                margin-right: 10px;
                /* Add some space between cards */
            }
            
            .subject-stream-card:last-child {
                margin-right: 0;
                /* Remove right margin from last card */
            }
            
            .subject-stream-card:hover {
                background-color: #f7f7f7;
                transform: translateY(-5px);
            }
            
            .subject-stream-card img {
                width: 100%;
                height: auto;
                border-radius: 5px;
                margin-bottom: 10px;
            }
            
            .popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(62, 66, 66, 0.9);
                z-index: 9999;
                color: #fff;
                text-align: center;
            }
            
            .popup h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .subject-card {
                width: 200px;
                height: 100px;
                background-color: #f7f7f7;
                border-radius: 5px;
                margin: 20px auto;
                text-align: center;
                line-height: 100px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                color: #000;
            }
            
            .subject-card:hover {
                background-color: #e1e1e1;
            }
            
            .popup-content {
                padding: 20px;
            }
            
            .go-back-button {
                display: block;
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin: 0 auto;
            }
            
            .go-back-button:hover {
                background-color: #555;
                color: #1bd2fb;
            }
            /* nav bar css */
            
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
            
            nav {
                background-color: #222;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
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
            /* footer css */
            
            footer p {
                background-color: black;
                color: white;
                text-align: center;
                margin-top: 215px;
            }
            footer{
                margin-bottom: -20px;
            }

            .lg{
                background-color: blue;
                padding: 10px;
            }
        </style>


    </head>

    <body>

        <!--nav bar-->
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
                    <li><a href="<?php echo BASEURL ?> /logout.php"  class="lg">Log out</a></li>
                <?php } ?>
                <?php if(!isset($_SESSION['id'])){ ?>
                <li><a href="<?php echo BASEURL ?>/login.php" >Login</a></li>
                <li><a href="<?php echo BASEURL ?>/signup.php">Register</a></li>
                <?php } ?>

            </ul>
        </nav>

        <h1>A/L Subject Stream</h1>
        <div class="subject-streams">
            <!-- Subject Stream 1 -->
            <div class="subject-stream-card" onclick="openPopup('technology')">
                <img src="technology.PNG" alt="Subject Stream 1">
                <h3>Technology</h3>
                <p>
                    Step into the future of technology with Science for Technology, Engineering Technology, and Bio-system Technology.
                </p>
            </div>
            <!-- Subject Stream 2 -->
            <div class="subject-stream-card" onclick="openPopup('commerce')">
                <img src="commerce.PNG" alt="Subject Stream 2">
                <h3>Commerce</h3>
                <p>
                    Uncover the secrets of business and economics, with subjects like Economics, Accounting, Business Studies, and ICT
                </p>
            </div>
            <!-- Subject Stream 3 -->
            <div class="subject-stream-card" onclick="openPopup('physical-science')">
                <img src="Physical_science.PNG" alt="Subject Stream 3">
                <h3>Physical Science</h3>
                <p>
                    Delve into the wonders of the physical world, studying subjects like Combined Maths, Chemistry, Physics, and ICT
                </p>
            </div>
            <!-- Subject Stream 4 -->
            <div class="subject-stream-card" onclick="openPopup('biological-science')">
                <img src="biological_science.PNG" alt="Subject Stream 4">
                <h3>Biological Science</h3>
                <p>
                    Investigate the living world through Biology, Chemistry, and Agriculture explore the fascinating realms of nature and ecosystems.
                </p>
            </div>
            <!-- Subject Stream 5 -->
            <div class="subject-stream-card" onclick="openPopup('arts')">
                <img src="arts.PNG" alt="Subject Stream 5">
                <h3>Arts</h3>
                <p>
                    Unleash your creativity with Social Science Subjects, Religious and Civilization Subjects, and Aesthetic Subjects.
                </p>
            </div>
        </div>



        <!-- Popup for Subject Stream 1 - Technology -->
        <div class="popup" id="technology">
            <h2>Technology</h2>
            <div class="subject-card" onclick="redirectToLecturePage('science-for-technology')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>"></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('engineering-technology')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Engineering Technology</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('bio-system-technology')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Bio-system Technology</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('ict')">
            <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">ICT</a></h4>
            </div>
            <button class="go-back-button" onclick="closePopup('technology')">Go back to Subject Streams</button>


        </div>




        <!-- Popup for Subject Stream 2 - Commerce -->
        <div class="popup" id="commerce">
            <h2>Commerce</h2>
            <div class="subject-card" onclick="redirectToLecturePage('economics')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Economics</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('accounting')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Accounting</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('business-studies')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Business Studies</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('ict')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">ICT</a></h4>
            </div>
            <button class="go-back-button" onclick="closePopup('commerce')">Go back to Subject Streams</button>
        </div>

        <!-- Popup for Subject Stream 3 - Physical Science -->
        <div class="popup" id="physical-science">
            <h2>Physical Science</h2>
            <div class="subject-card" onclick="redirectToLecturePage('combined-maths')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Combined Maths</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('chemistry')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Chemistry</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('physics')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Physics</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('ict')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">ICT</a></h4>
            </div>
            <button class="go-back-button" onclick="closePopup('physical-science')">Go back to Subject Streams</button>
        </div>

        <!-- Popup for Subject Stream 4 - Biological Science -->
        <div class="popup" id="biological-science">
            <h2>Biological Science</h2>
            <div class="subject-card" onclick="redirectToLecturePage('biology')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Biology</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('chemistry')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Chemistry</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('physics')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Physics</a></h4>
            </div>
            <div class="subject-card" onclick="redirectToLecturePage('agriculture')">
                <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Agriculture</a></h4>
            </div>
            <button class="go-back-button" onclick="closePopup('biological-science')">Go back to Subject Streams</button>
        </div>

        <!-- Popup for Subject Stream 5 - Arts -->
        <div class="popup" id="arts">
            <h2>Arts</h2>
        <div class="subject-card" onclick="redirectToLecturePage('social-science')">
        <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Social Science Subjects</a></h4>
        </div>
        <div class="subject-card" onclick="redirectToLecturePage('religious-civilization')">
            <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Religious and Civilization Subjects</a></h4>
        </div>
        <div class="subject-card" onclick="redirectToLecturePage('aesthetic-subjects')">
            <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Aesthetic Subjects</a></h4>
        </div>
        <div class="subject-card" onclick="redirectToLecturePage('language-subjects')">
            <h4><a href="<?php echo isset($_SESSION['payment_made']) && $_SESSION['payment_made'] ? 'content.php' : 'payment.php'; ?>">Language Subjects</a></h4>
        </div>
        <button class="go-back-button" onclick="closePopup('arts')">Go back to Subject Streams</button>
        </div>


        <footer>
            <p>&copy; Master Education. All rights reserved.</p>
        </footer>

        <script>
            function openPopup(popupId) {
                document.getElementById(popupId).style.display = 'block';
            }

            function redirectToLecturePage(subjectId) {

                window.open(lectureMaterials[subjectId], '_blank');
            }

            function closePopup(popupId) {
                document.getElementById(popupId).style.display = 'none';
            }


            function openPopup(popupId) {
                var popup = document.getElementById(popupId);
                popup.style.display = 'block';

                // Add a click event listener to the popup
                popup.addEventListener('click', function(event) {
                    // Check if the clicked element is the popup itself (not the link cards)
                    if (event.target === popup) {
                        closePopup(popupId);
                    }
                });
            }
        </script>
    </body>

    </html>