<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:signin.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Game_Mart</title>
  <link rel="icon" href="images/favicon.ico">
  <!--bootstrap-->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!--css style sheets-->
  <link rel="stylesheet" href="styles.css">
  <!--Google fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Ubuntu&display=swap" rel="stylesheet">
  <!--font awesome-->
  <script src="https://use.fontawesome.com/fe1ef42ebe.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
</head>

<body>
  <?php
            if(isset($_GET['message2'])) {
              $message = $_GET['message2'];
              echo $message;
                        }
                      ?>
  <!--navbar-->
 <section id= "navigation">
 <div class="headervideo">
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <img class="navbar-brand logo" src="images/logocolour2.png" alt="action">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
      <span class="searchbtn" ><i class="fa fa-search"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupported">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-3"  type="search" placeholder="Search.." aria-label="Search">
        <button id="btn1" class="btn btn-outline-warning my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
      </form> 

      <button id="shopbtn" class="btn btn-outline-warning my-2 my-sm-0" type="button" data-toggle="modal" data-target="#cart"><i class="fa fa-shopping-cart"></i>(<span class="total-count"></span>)</button>
    </div>


    <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button class="clear-cart btn btn-danger">Clear Cart</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="payment.html" class="btn btn-primary">Order Now</a>
      </div>
    </div>
  </div>
</div> 
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="news.html" id="navbarDropdown"  aria-haspopup="true" aria-expanded="false">
            News
          </a>
          
        </li>
        <li>
          <div class="dropdown">
            <a class="nav-link  dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
            Signin
            </a>
            <div id="dropdownbtn2" class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="www.facebook.com" id="loginbtn" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
              <a href="www.gmail.com" id="loginbtn" class="btn btn-danger"><i class="fa fa-google"></i> Google</a>
              <a href="signin.html" id="loginbtn" class="btn btn-info"> Login</a>
              <a href="signup.html" id="loginbtn" class="btn btn-info"> Sign Up</a>
          
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
</section>
 


<!--Menu--> 
  <section id="menu">
    <div class="dropdown dropdwnbtn"> 
      <button class="dropbtn">Gaming</button>
        <div class="dropdown-content drpcont2">
         <a class="dropdown-item" href="Genre.html">Action</a>
         <a class="dropdown-item" href="Genre.html">Adventure</a>
         <a class="dropdown-item" href="Genre.html">Arcade</a>
         <a class="dropdown-item" href="Genre.html">Simulation</a>
         <a class="dropdown-item" href="Genre.html">Horror</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="Genre.html">More</a>
        </div>  
    
    </div>
    <div class="dropdown dropdwnbtn"> 
      <button class="dropbtn">Electronics</button>
        <div class="dropdown-content drpcont2">
         <a class="dropdown-item" href="electronics.html">Computers</a>
         <a class="dropdown-item" href="#">Smart Electronics</a>
         <a class="dropdown-item" href="#">Camera & Photo</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="electronics.html">More</a>
        </div>  
    
    </div>
   
  </div>
</section>

<!-- Banner  -->
<section class="banner">
<div class="overlay">  
  <a href="https://store.steampowered.com/sale/505GamesPublisherSale">
  <video autoplay loop muted playsinline id="myvideo" width="100%" height="100%" src="images/webm_page_bg_english.webm"></video>
  </a>
  <h1 class="head1">Best deals for Gamers and Geeks</h1>
  
</div>
    
</section>
<!--games-->

<h1 class="browse">The Best Gaming Deals:</h1>
<section class="gaming deal">
  <div class="row row1">
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/minecraft.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Minecraft</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Minecraft" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
  
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/rainbow six seige.png" alt="action">
        <div class="card-block">
        <h3 class="card-title">Rainbow six seige</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Rainbow six seige" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/fallguys.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Fall Guys</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Fall Guys" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/Dota 2.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Dota 2</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Dota 2" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/Microsoft Flight Simulator.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Flight Simulator</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Flight Simulator" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
  
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/battlefield 5.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Battlefield 5</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Battlefield 5" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/pubg.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">PUBG</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="PUBG" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1 card-img-top" src="images/mortal kombat 11.jpg" alt="action">
        <div class="card-block">
        <h3 class="card-title">Mortal Kombat 11</h3>
        <p class="price card-text">$19.99</p>
        <p><a href="#" data-name="Mortal Kombat 11" data-price="19.99" class="add-to-cart "><button>Add to Cart</button></p></a>
      </div>
    </div>
    </div>
  </div>
</section>    

  <!-- Genres -->
  <h1 class="browse">Browse by Game Genre:</h1>
  <p class="browse1"> Are you an RPG fan or strategy game lover? Or maybe you spend hours playing FPS shooters? In this section, you will find the best video games categorized into different genres.</p>
<section class="genre">
  <div class="row row1">
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <a href="Genre.html"><img class="images1" src="images/action.jpg" alt="action"></a>
        <h3>Action</h3>
      </div>
    </div>
  
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/Adventure.jpg" alt="adventure">
        <h3>Adventure</h3>
      </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/arcade.jpg" alt="arcade">
        <h3>Arcade</h3>
      </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/shooting.jpg" alt="shooting">
        <h3>Shooting</h3>
      </div>
    </div>
  </div>
  <div class="row row2">
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/simulation.jpg" alt="simulation">
        <h3>Simulation</h3>
      </div>
    </div>
  
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/racing.jpg" alt="racing">
        <h3>Racing</h3>
      </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/horror.jpg" alt="horror">
        <h3>Horror</h3>
      </div>
    </div>
    
    <div class="col-lg-3 col-sm-6 col1">
      <div class="card crd1">
        <img class="images1" src="images/puzzle.jpg" alt="puzzle">
        <h3>Puzzle</h3>
      </div>
    </div>
  </div>
</section>    

  <!-- Testimonials -->
  <h1 class="test1">THE COMMUNITY RECOMMENDS</h1>
  <h3 class="test1"> These Games Today</h3>
  <section id="testimonials">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="1000" data-pause="hover">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-50 test2" align="left" src="images/avengers.jpg" alt="First slide">
          <h3 class="test3">"Pros : 1. Story is surpisingly solid, with good voice acting and everything you'd expect from a good story. However, it will start to feel rushed as you progress.
            2. Combat is fun, with every character feeling unique with a diverse moveset."</h3>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 test2" align="left" src="images/magic lessons.jpg" alt="Second slide">
          <h3 class="test3">"I like puzzles a lot, it's a great pastime to relax, I'm training my eyes to find the pieces, the good thing is that I can assemble the images gradually and when I get tired I don't have to keep it..."</h3>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 test2" align="left" src="images/waifus.jpg" alt="Third slide">
          <h3 class="test3">"If you for some reason haven't played this game already - get it & play it. Being early access it's still fun and cheap. Plus, there is a gallery. ..."  </h3>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 test2" align="left" src="images/stride.jpg" alt="Third slide">
          <h3 class="test3">"Beta tester for Stride. I've played this game for six hours now on Endlesss Mode. It's a fantastic game. It plays really well (though at times janky). ..."</h3>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 test2" align="left" src="images/evil democracy.jpg" alt="Third slide">
          <h3 class="test3">"Huh! Evilll Democrac???y?)) Why is everything "evil" by this developer? :)) Probably it will be a sort of a series?..The game is still in Early Access but it looks pretty interesting..."</h3>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
          
  </section>

<!--signup section-->

<section id="cta">

  <h1 class="cta1"><strong>Looking for recommendations?</strong></h1>
  <h3>Sign in to view personalized recommendations</h3>
  <a href="signup.html" id="loginbtn1" class="btn btn-primary"> Signin</a>    
  <h2>Or <a href="signup.html" id="signup">Sign up</a> and join GameMart for free</h2>
</section>


  <!-- Footer -->
  <footer class="footer-dis">

    <div class="footer-left">
      <h3>About<span> GameMart</span></h3>

      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="signup.html">signup</a>
        |
        <a href="contact.html">Contact</a>
      </p>

      <p class="footer-copyright">© Copyright 2020 GameMart</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
          <p><span>401, Saraswati College
           Plot No. 46, Sector-5</span>
           Kharghar, Navi Mumbai,410210</p>
      </div>

      <div>
        <i class="fa fa-phone" style="font-size: 19px;line-height: 38px;"></i>
        <p>+91 93261 33074</p>
      </div>
      <div>
        <i class="fa fa-envelope style="font-size: 15px;line-height: 36px;"></i>"></i>
        <p><a href="mailto:admissions.scoe@sce.edu.in">admissions.scoe@sce.edu.in</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        GameMart is a video game digital distribution service. </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook" style="font-size:24px ;color:#3b5998;"></i></a>
        <a href="#"><i class="fa fa-twitter" style="font-size:24px ; color: #00acee;" ></i></a>
        <a href="#"><i class="fa fa-instagram" style="font-size:24px ; color :#DD2A7B; "></i></a>
        <a href="#"><i class="fa fa-linkedin" style="font-size:24px ;color:#0e76a8;"></i></a>
        <a href="#"><i class="fa fa-youtube" style="font-size:24px ; color :#c4302b; "></i></a>
      </div>
    </div>
  </footer>
  <script  src="index.js"></script>
</body>
</html>
 


 

