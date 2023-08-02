<html>
<head>
	<title>Registration Form</title>
	<link rel = "icon" href ="Images/FoodnFeed Logo.png" type = "image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
<link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
<link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="styles/stylemenu.css">
<link rel="stylesheet" type="text/css" href="CusReg_PageStyles.css">
<link rel="stylesheet" type="text/css" href="styles/FeedbackHover.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Navbar Section starts Here -->

    <div class="navbar">

        <a class="active" href="#home">Home</a>
        <a href="#news">Menu</a>
         <a href="#aboutus">About Us</a>
        <a href="#contactus">Contact Us</a>
        <div class="use">
                <div class="action">
                        <div class="profile" onclick="menu();">
                            <a href="#"></a><img src="Images/user.png" id = "use" width="25px" height="25px"></a>
                        </div>
                        <div class="menu">
                            
                            <ul>
                               
                <li><img src="Images/login.png"><a href="login.php">Login</a></li>
                 <li><img src="Images/register.png"><a href="register.php">Sign Up</a></li>
              </ul>
                        </div>
                    </div>
                </div>
                <script>
                    function menu()
                    {
                        const toggle = document.querySelector('.menu');
                        toggle.classList.toggle('active');
                    }
                </script>
      </div>

 <!-- Navbar Section Ends Here -->
<div class ="toppg">
<h1 ><center>Create New Account</center></h2>
<h3 ><center>Already Have an Account ?</center></h3>
<center><a href="#SignIn">Sign In</a></center>
<br/>

<!--register form using PHP-->

    <?php if (isset($_POST['form_submitted'])): ?>   <center>You have submitted the form successfully !!!
		 <br/><br/> <br/><br/>
		 
		<h2 style="color:white">Thank You <?php echo $_POST['firstname']; ?> </h2> 
		 <br/><br/> 
        <p style="color:white">You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </p>

        <p style="color:white" >Go <a href="regis.php">back</a> to the form</p></center>
		
		<br/><br/> <br/><br/>
		
        <?php else: ?>

            <center><h2 style="color:white">Customer Registration Form</h2></center>

            <form action="regis.php" method="POST">

                 First name:
                <input type="text" name="firstname">
                
                <br> Last name:
                <input type="text" name="lastname"> <br>
                
				Address :<br/>
    <input type="text" name="Address" rows="8" cols="50" placeholder="Address" required><br/><br/>
 
Telephone Number:<br/>
 <input type="text" name="moboleno" pattern="[0-9]{10}"placeholder="Mobile Number" required ><br/><br/>
 
Email Address:<br/>
 <input type="text" name="email" placeholder="abc@gmail.com" pattern= "[a-z0-9._+-%]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br/><br/>
 
Identity Card No:<br/>
 <input type="text" name="IDno" placeholder="IdentityCardNo" required><br/><br/>
 
 
 Password :<br/>
 <input type="text" name="pw" id="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
 title="Must contain at least one number and one uppercase and lowercase letter,
 and at least 8 or more characters" required><br/><br/>
 Re-enter Password :<br/>
 <input type="text" name="repw"id="cnfrmpwd" placeholder="Re-enter password" required><br/><br/>
 <br/><br/>
 May we send Information about our website to your Email Address ?<br/><br/>
 Yes : <input type="checkbox" id="checkbox" class="inputStyle" onclick="enableButton()">
 No :  <input type="checkbox" id="checkbox" class="inputStyle" onclick="enableButton()">
 <br/><br/>
 <input type="checkbox" id="checkbox" class="inputStyle" onclick="enableButton()">
I agree to the Terms and Conditions & Privacy Policy 
	 <br/><br/>			
				
				
				
			<input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>

     <?php endif; ?> 
	<hr>
 
 <footer class="footer">
  	 
  	 	<div class="row">
  	 		<div class="footer-col">
				<h4>Popular Categories</h4>
				<ul>
					<li><a href="#">Sri Lankan</a></li>
					<li><a href="#">Indian</a></li>
					<li><a href="#">Italian</a></li>
					<li><a href="#">Vegetarian</a></li>
				</ul>
			</div>
  	 		<div class="footer-col">
  	 			<h4>Popular Pages</h4>
  	 			<ul>
  	 				<li><a href="#">Home</a></li>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">About Us</a></li>
  	 				<li><a href="#">Contact Us</a></li>
  	 				<li><a href="#">Restaurants Near Me</a></li>
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
	 <p class="copyright">&COPY; 2022 foodnfeed.com. All Rights Reserved.</p>
  </footer>              
</body> 
</html>