<?php  
require_once(__DIR__ . "/config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Slider |Dev Mode</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <style>
	/* ------------ GOOGLE FONTS ------------ */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');


:root{
  /* FONT */
  --font: 'Poppins', sans-serif;

  /* COLORS */
  --color: #9176FF;
  --bg-color: #f4f4f4;
}
body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            background: radial-gradient(circle, rgba(195, 34, 113, 0.4907212885154062) 0%, rgba(253, 181, 45, 0.7540266106442577) 100%);
        }

        .container {
            text-align: center;
            min-width: 326px 850px;
            
        }

        nav {
            background-color: #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            
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
            color:red;
            text-decoration: underline;
            
            font-weight: 900;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            align-items: center;
            padding: 15px 10;
           

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
            nav{
                display: flex;
                margin: 0;
                padding: 0;
                width: 100%;

            }
            nav ul{
                display: flex;
            }
            nav ul li{
                display: flex;
            }
        }

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: var(--font);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;

  background-color: var(--bg-color);
}

nav {
    background-color: #222;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin-top: 1px;
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
/* ----------- SLIDER ------------ */
.swiper{
  width: 100%;
}

.swiper-wrapper{
  width: 100%;
  height: 35em;
  display: flex;
  align-items: center;
}

.card{
  width: 20em;
  height: 90%;
  background-color: #fff;
  border-radius: 2em;
  box-shadow: 0 0 2em rgba(0, 0, 0, .2);
  padding: 2em 1em;
  display: flex;
  align-items: center;
  flex-direction: column;
  margin: 0 2em;
}

.swiper-slide:not(.swiper-slide-active){
  filter: blur(1px);
}

.card__image{
  width: 10em;
  height: 10em;
  border-radius: 50%;
  border: 5px solid var(--color);
  padding: 3px;
  margin-bottom: 2em;
}

.card__image img{
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
}

.card__content{
  display: flex;
  align-items: center;
  flex-direction: column;
}

.card__title{
  font-size: 1.5rem;
  font-weight: 500;
  position: relative;
  top: .2em;
  text-align: center;
}

.card__name{
  color: var(--color);
}

.card__text{
  text-align: center;
  font-size: 1.1rem;
  margin: 1em 0;
}



h4{
font-size:35px;
 text-align:center;
 margin-top:20px;
 color:blue ;
 text-decoration: underline;
}

footer p{
  background-color: black;
  color: white;
  text-align: center;
  margin-top: 13px;
}

.logout{
  background-color: blue;
  padding: 10px;
}

	</style>
    
</head>
<body>

 
  <section class="swiper mySwiper">
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



<h4>Our Team Members</h4>

    <div class="swiper-wrapper">

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="1.jpg" alt="card image">
        </div>

        <div class="card__content">
          <span class="card__title">Mr.Sumith Weerasooriya</span>
          <span class="card__name">Biology teacher</span>
          <p class="card__text">BSC,MSC,PHD(Reading)</p>
		  <p>sumibio@gmail.com</p>
         
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="2.jpg" alt="card image">
        </div>

        <div class="card__content">
          <span class="card__title">Mr.K.Saman</span>
          <span class="card__name">Chemistry teacher</span>
          <p class="card__text">BSC(Chemistry special)</p>
		  <p>saman@example.com</p>
          
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="3.jpg" alt="card image">
        </div>

        <div class="card__content">
          <span class="card__title">Mr.SA. Anurasinghe</span>
          <span class="card__name">Combined Maths teacher</span>
          <p class="card__text">B.Sc/M.Sc.(Industrial Maths)UOM</p>
		<p>anumaths@example.com</p>	
		
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="4.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Mr.Ruwan Sarathchandra</span>
          <span class="card__name">Physics teacher</span>
          <p class="card__text">BSC.(Special)Honors:M.Sc.MBA</p>
		  <p>ruwnphy@gmail.com</p>
        
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="5.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Mr.Ruwan Somathilaka</span>
          <span class="card__name">ICT teacher</span>
          <p class="card__text">BSc.IT special(Honors)UOM</p>
		  <p>ruwanict@gmail.com</p>
        
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="6.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Mr.Pasan Gamage</span>
          <span class="card__name">Business studies teacher</span>
          <p class="card__text">B.Sc.Business Management(sp)USJP</p>
		  <p>pasanbm@gmail.com</p>
          
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="7.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Miss.Udeni Dikkumbura</span>
          <span class="card__name">Accounting teacher</span>
          <p class="card__text">B.Sc.Accounting(sp)USJP</p>
		  <p>udeniaccount@gmail.com</p>
        
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="8.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Miss.Priya Alvis</span>
          <span class="card__name">Economics teacher</span>
          <p class="card__text">B.Sc.Economics(sp)USJP</p>
		  <p>priyaecon@gmail.com</p>
         
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="9.jpg" alt="card image">
        </div>
		<div class="card__content">
          <span class="card__title">Miss.Devika Jayampathi</span>
          <span class="card__name">Sinhala teacher</span>
          <p class="card__text">BA.Sinhala(special)UOC</p>
		  <p>devikasinhala@gmail.com</p>
          
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card__image">
          <img src="10.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Miss.Sayuri Senadeera</span>
          <span class="card__name">Media teacher</span>
          <p class="card__text">BA.(Mass Communication)/p>
		  <p>sayumedia@gmail.com</p>
         
        </div>
      </div>
	  
	  <div class="card swiper-slide">
        <div class="card__image">
          <img src="11.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Mr.Menaka Senavirathna</span>
          <span class="card__name">Engineering Technology teacher</span>
          <p class="card__text">B.Eng.Tech(SP)UOJ</p>
		  <p>menaetech@gamil.com</p>
          
        </div>
      </div>
	  <div class="card swiper-slide">
        <div class="card__image">
          <img src="12.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Mr.Wasana Weerasinghe</span>
          <span class="card__name">Science For Technology</span>
          <p class="card__text">Bsc.</p>
		  <p>wasanasft@gmail.com</p>
          
        </div>
      </div>
	  <div class="card swiper-slide">
        <div class="card__image">
          <img src="13.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Mr.Prabath Nahalle</span>
          <span class="card__name">BIO System Technology/Agri</span>
          <p class="card__text">BSC,MSC,PHD(Reading)</p>
		  <p>prabathbst@gmail.com</p>
          
        </div>
      </div>
	  <div class="card swiper-slide">
        <div class="card__image">
          <img src="14.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Mr.Kulasooriya</span>
          <span class="card__name">Political</span>
          <p class="card__text">BA.Political(Sp)UOK</p>
		  <p>janapoli@gmail.com</p>
          
        </div>
      </div>
	  <div class="card swiper-slide">
        <div class="card__image">
          <img src="15.jpg" alt="card image">
        </div>
        <div class="card__content">
          <span class="card__title">Miss.Sriyani Aluvihare</span>
          <span class="card__name">Music teacher</span>
          <p class="card__text">BA.Music(special)UOK</p>
		  <p>devikasinhala@gmail.com</p>
          
        </div>
      </div>
	  

    </div>
	
	

    </main>

    <footer>
      
        <p>&copy; Master Education. All rights reserved.</p>
    </footer>
</body>
  </section>

<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

</body>
</html>