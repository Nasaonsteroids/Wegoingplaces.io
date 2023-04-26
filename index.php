<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<style type="text/css">


@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap");

@font-face {
  font-family: AstroSpace;
  src: url(/fonts/AstroSpace.ttf);
}

*{
    scroll-behavior: smooth;
    box-sizing: border-box;
}

body{
    background: url(img/mountain.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    font-family: "Montserrat", sans-serif;
    background-attachment: fixed;
}

@media only screen and (max-width: 767px){

}

header {
    background-color: #141b25;
  }

  .main-nav {
    height: 90px;
  }

  .logo {
    color: white;
    line-height: 90px;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    margin-left: 30px;
    font-family: "AstroSpace", sans-serif;
  }

  .navlinks {
    list-style: none;
    float: right;
    line-height: 90px;
    margin: 0;
    padding: 0;
  }

  .navlinks li {
    display: inline-block;
    margin: 0px 20px;
  }

  .navlinks li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    transition: all 0.3s linear 0s;
    text-transform: uppercase;
  }

  .navlinks li a:hover {
    color: #884841;
    padding-bottom: 7px;
    border-bottom: 2px solid #884841;
  }

  li a.contact {
    background-color: #EF978D;
    padding: 9px 20px;
    border-radius: 50px;
    transition: all 0.3s ease 0s;
    border-bottom: none;
  }

  li a.contact:hover {
    background-color: #884841;
    color: white;
    border-bottom: none;
  }

  #check {
    display: none;
  }

  .menu-btn {
    font-size: 25px;
    color: white;
    float: right;
    line-height: 90px;
    margin-right: 40px;
    display: none;
    cursor: pointer;
    text-decoration: none;
  }

  @media (max-width: 800px) {
    .navlinks {
      position: fixed;
      width: 100%;
      height: 100vh;
      text-align: center;
      transition: all 0.5s;
      right: -100%;
      background: #222831;
    }

    .navlinks li {
      display: block;
    }

    .navlinks li a {
      font-size: 20px;
    }

    .navlinks li a:hover {
      border-bottom: none;
    }

    .menu-btn {
      display: block;
      text-decoration: none;

    }

    #check:checked ~ .navlinks {
      right: 0;
    }
  }

  @media (max-width: 360px) {
    .logo {
      margin-left: 10px;
      font-size: 25px;
    }

    .menu-btn {
      margin-right: 10px;
      font-size: 25px;
      text-decoration: none;

      
    }

    .menu-btn:focus {
      color: blue;
      text-decoration: none;

    }
  }
  a:link {
    text-decoration: none;
    color: white;
  }
  
  a:visited {
    text-decoration: none;
    color: white;

  }
  
  a:hover {
    text-decoration: none;
    color: white;

  }
  
  a:active {
    text-decoration: none;
    color: white;

  }

  #section2{
    background-color: transparent;
    padding: 15px;
    margin-top: 860px;
    padding-top: 200px;
    backdrop-filter: blur(24px);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}



	</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="clock.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
</head>
<body>
    <section id="section1">
    <header>
        <nav class="main-nav">
          <input type="checkbox" id="check" />
          <label for="check" class="menu-btn">
            <i class="fas fa-bars"></i>
          </label>
          <a href="index.html" class="logo">Sphere.</a>
          <ul class="navlinks">
            <li><a href="logout.php">Logout</a></li>
            <li><a href="#section2">Projects</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#footer" class="contact">Contact</a></li>
          </ul>
        </nav>
      </header>
      </section>
      <div id="clock" class="center-screen">
        <div class="digital-time">
          <span id="hours"></span> : <span id="minutes"></span> : <span id="seconds"></span>
        </div>
      </div>
      

      <section id="section2">
        <div class="parent-container">
          <div class="column">
            <div class="card">
              <img src="img/simon-fitall-tvleqH3p1os-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 1 New years countdown</h2>
                <p>Want to know when its new years so your helpless and useless self and remind yourself you might do it next year?</p>
                <button id="buttonNYC"><a href="newyearscount.html">Take me there!</a></button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/r8.jpg" alt="">
              <div class="info">
                <h2 id="audih2">Project 2 Audi R8 (2023)</h2>
                <p>A website about the lovely and legendary audi r8 and its passing. It is FAST and it is FURIOUS!</p>
                <button id="buttonr8"><a href="car.html">Take me there!</a></button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/altumcode-PNbDkQ2DDgM-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 3 Time converter</h2>
              <p>It will pop up a window. There is a type bar. Type in any amount of seconds and only use NUMBERS!</p>
                <button  id="buttonpython" ><a href="convert.html">Take me there!</a></button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/yohan-marion-G83CtMn7ZxI-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 4 Podcast website</h2>
                <p>Waste 20 minutes of your life and listen to our podcast in swedish about the dark sides of our internet!</p>
                <button id="buttondarkside"><a href="https://nazzbuz.github.io/podcast-allan/">Take me there!</a></button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/unitygame.PNG" alt="">
              <div class="info">
                <h2>Unity 2D Game</h2>
                <p>My own unity game made with passion and whole lotta C#</p>
                <button id="unitygame"><a href="https://play.unity.com/mg/other/mylovelyunitygame">Take me there!</a></button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 6 hopefully</h2>
                <p></p>
                <button>You cannot fatty</button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 7 hopefully</h2>
                <p></p>
                <button>You cannot fatty</button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 8 hopefully</h2>
                <p></p>
                <button>You cannot fatty</button>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="img/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="">
              <div class="info">
                <h2>Project 9 hopefully</h2>
                <p></p>
                <button>You cannot fatty</button>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p>Welcome to my home page! I strive to create innovative and user-friendly software solutions.</p>
            </div>
            <div class="col-md-4">
              <h3>Contact Me</h3>
              <ul>
                <li>Email: allan.sikder@elev.ga.ntig.se</li>
                <li>Phone: xxx-xxx-xxxx</li>
                <li>Address: Nowhere to be found</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3>Follow Me</h3>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="copyright">Copyright &copy; 2023 Your Company. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
      <script src="index.js"></script>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>