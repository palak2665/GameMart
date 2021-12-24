<html>

   <head>
      <title> Signin Form </title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="icon" href="images/favicon.ico">
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
<video autoplay loop muted playsinline id="myvideo1" width="Auto" height="Auto" src="game1.mp4"></video>       
    <div id="login-box">
        <div class="left-box">
            <h1> Sign In</h1>
            <?php
                if(isset($_GET['message1'])){
                    $message=$_GET['message1'];
                    echo $message;
                }
            ?>
                <form action="validation.php" method="post"> 
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <input type="submit" name="signup-button" value="Sign In"/>
                    <a href="signup.php" id="loginbtn" class="btn btn-info"> Sign Up</a>
                </form> 
                
        </div>
        <div class="right-box">
            <span class="signinwith">Sign in with<br/>Social Network</span>
                
            <button class="social facebook">Log in with Facebook</button>    
            <button class="social twitter">Log in with Twitter</button> 
            <button class="social google">Log in with Google+</button> 
                    
                
        </div>
        <div class="or">OR</div>
    </div>
            
</body>    
</html>