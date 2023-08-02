<?php
	include_once 'config.php' ;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Login - foodnfeed.com</title>
        <link rel = "icon" href ="Images/FoodnFeed Logo.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
        <link rel="stylesheet" type="text/css" href="styles/UserLoginPageSTYLES.css">
        <link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .TOP{
    margin: 0;
    padding: 0;
    background-image: url("Images/picture6.jpg");
    min-height: 380px;
    background-size: cover;
    background-position: center;
    position: relative;

    }
    
    </style>
    </head>

        <body>
            <div class="navbar">
                <a class="active" href="indexNew.html">Home</a>
                <a href="Menu.html">Menu</a>
                <a href="AboutUs.html">About Us</a>
                <a href="ContactUs.html">Contact Us</a>
            </div>

            <div class ="TOP">
                <h1 ><center>User Login</center></h1>
                <br/><br/>
                <div class = "loginbox">
                    <h2>Welcome</h2>
                    
            <form action="UserProfilePage.php" method="POST">
                        <p>Username:</p>
                        <i class="fa fa-at" aria-hidden="true"></i>
                        <input type="text" name="username" placeholder="Enter username">
                        <p>Password:</p>
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <input type="password" name="password1" placeholder="Enter Password">
                        <input type="submit" name="submit" value="Sign in">
                        <a href="#" >Don't have an account?</a><br/>
                        <a href="php/index.php" >Sign up here</a>

            <?php
			require 'config.php' ;

			if(isset($_POST['loginbox'])){
				$username = $_POST['username'];
    			
    			$password = $_POST['password1'];

				$sql = "INSERT INTO userlogin(username,password1) VALUES ('$username',$password)" ;
				if($conn->query($sql)){
					echo '<script type="text/javascript">alert("Logged in successfully")</script>';
				}
				else{
        			echo '<script type="text/javascript">alert("Log in failed")</script>';
					
    			}
			}
		    ?>

            </form>
                </div>
                <br/><br/>
            </div>

            <hr>

            <footer class="footer">
  	 
                <div class="row">
                    <div class="footer-col">
                     <h4>Popular Categories</h4>
                     <ul>
                         <li><a href="Sri Lankan.html">Sri Lankan</a></li>
                         <li><a href="Indian.html">Indian</a></li>
                         <li><a href="Indian.html">Italian</a></li>
                         <li><a href="Vegetarian.html">Vegetarian</a></li>
                     </ul>
                 </div>
                    <div class="footer-col">
                        <h4>Popular Pages</h4>
                        <ul>
                            <li><a href="indexNew.html">Home</a></li>
                            <li><a href="FAQs.html">FAQ</a></li>
                            <li><a href="AboutUs.html">About Us</a></li>
                            <li><a href="ContactUs.html">Contact Us</a></li>
                            <li><a href="restaurant.html">Restaurants Near Me</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Reach Us</h4>
                        <ul>
                            
                            <li><a href="#">info@foodnfeed.lk</a></li>
                            <li><a href="#">+94 771559844</a></li>
                            <li><a href="#">foodnfeed@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                 
                        <h4>Connect With Us</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div> 
              
            <br/><br/> <br/>
          <center><p style="color:white; font-size:10px">&COPY; 2022 foodnfeed.com. All Rights Reserved.</p></center>
       </footer>
        </body>
</html>