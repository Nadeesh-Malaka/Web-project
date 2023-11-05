<?php
 
require_once(__DIR__ . "/config/config.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="home.js"></script>
</head>

<body>
    <!--Sidebar-->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

    <!--Sidebar links-->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="subjectS.php">Stream Subjects</a>
        <a href="about.php">About</a>
        <a href="team.php">Our Expertise</a>
        <a href="help and contact.php">Contact Us</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
        <h1 class="header">Master Education</h1>
    </div>


    <div id="video-container">
        <video autoplay muted loop id="video-bg">
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div id="content">

        <!--Carousel-->
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                    </div>
                </div>
            </div><br><br>
         
            <a href="<?php echo isset($_SESSION['id'] ) ? 'subjectS.php' :'signup.php' ?>"  class="button">Enroll Now</a>
            

            <div class="container py-5">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img.jpg">
                </div>
                <div class="text-left">
                    <h1 class="text-head">Innovative Way To Learn</h1><br><br>
                    <p class="des">Master Education is dedicated to providing high-quality education for personal and professional development, catering to learners of all backgrounds. With a team of skilled educators, they offer flexible learning options, self-paced courses, video lectures, interactive quizzes, assignments, and discussion forums. Enrollment provides lifelong access to course materials, allowing students to refresh their knowledge and pursue their goals. Master Education believes in lifelong learning and is excited to be a part of your educational journey.</p><br>
                    <div class="list">
                        <div>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right text-primary"></i> Skilled Instructors</p>
                        </div>
                        <div>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right text-primary"></i> Online Classes</p>
                        </div>
                        <div>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right text-primary"></i> International Certificate</p>
                        </div>
                    </div><br>
                </div><br>
                <a href="about.php" class="btnn">Learn More</a>
            </div>
        </div>

    </div>

    <!--Testimonial start-->
    <section class="home-testimonial">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center testimonial-pos">
                <div class="col-md-12 pt-4 d-flex justify-content-center">
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Explore the students experience</h2>
                </div>
            </div>
            <section class="home-testimonial-bottom">
                <div class="container testimonial-inner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;The online course was well-planned, easy to follow, and had a sufficient work load for effective learning and understanding.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="pic1.jpg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Chathuri Cooray </div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;This website offers valuable support for high school students, offering relevant learning resources for their education and activities.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="pic2.jpg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Harshika Jathunge</div>
                                    <div class="link-position d-flex justify-content-center">Science for Technology Teacher</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 style-3">
                            <div class="tour-item ">
                                <div class="tour-desc bg-white">
                                    <div class="tour-text color-grey-3 text-center">&ldquo;This is my first online class, and I am excited to continue taking more. The course outline and PowerPoint were helpful.&rdquo;</div>
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="pic3.jpg" alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Sineth Chamikara</div>
                                    <div class="link-position d-flex justify-content-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>
    <!--Testimonial End-->

    <!--Footer Section-->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <i class="fa fa-map-marker" aria-hidden="true">&nbsp;&nbsp;Main Street, Colombo, Sri Lanka</i><br>
                            <i class="fa fa-phone" aria-hidden="true">&nbsp;&nbsp;Call +94 112 345 678</i><br>
                            <i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;masteredu@gmail.com</i>
                        </div>
                    </div>
                    <div class="info_social">
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-outline-light btn-square" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_link_box">
                        <h4>
                            Subject Streams
                        </h4>
                        <div>
                            <h4><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Technology</h4>
                        </div>
                        <div>
                            <h4><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Commerce</h4>
                        </div>
                        <div>
                            <h4><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Physical Science</h4>
                        </div>
                        <div>
                            <h4><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Biological Science</h4>
                        </div>
                        <div>
                            <h4><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Arts</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_detail">
                        <h4>About</h4>
                        <p>Master Education emphasizes education as the key to personal and professional development, providing a platform for learners of all backgrounds to gain knowledge, develop skills, and realize their potential.</p>
                    </div>
                    <div>
                        <img src="logo.png" class="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <hr>
                    <p>
                        © <span id="displayYear">Master Education 2023</span> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

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