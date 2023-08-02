<html>
<head>
	<title>Delivery Riders Registration- foodnfeed.com</title>
	<link rel = "icon" href ="Images/FoodnFeed Logo.png" type = "image/x-icon">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!--External stylesheets-->
	<link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
	<link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
	<link rel="stylesheet" type="text/css" href="new.css">
	<link rel="stylesheet" type="text/css" href="styles/stylemenu.css">
	<link rel="stylesheet" type="text/css" href="DeliveryPgStyles.css">
	<link rel="stylesheet" type="text/css" href="styles/FeedbackHover.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
form{
	width:900px;
	margin:auto;
	padding:20px;
	background:rgba(180, 173, 97, 0.321);
	font-size:16px;
	font-family:Verdana;
	color:#211E41 ;
	
}
</style>

</head>

<body>

<!-- Navbar Section starts Here -->

    <div class="navbar">

			<a href="indexNew.html">Home</a>
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
<h1 ><center>~~Start Your Journey with Us~~</center></h2>

<!--Image grid-->
<div class="row">
	<div class="column">
		<img src="Images/delivery.jpg" alt="delivery" style="width:100%">
	</div>

	<div class="column">
		<img src="Images/ResDel.jpg" alt="del rider" style="width:100%">
	</div>

	<div class="column">
		<img src="Images/del2.jpg" alt="Mountains" style="width:100%">
	</div>
</div>
<br/>
 
 
 <!--register form using PHP-->

    <?php if (isset($_POST['form_submitted'])): ?>   <center>You have submitted the form successfully !!! <br/><br/>
		~~~Please wait few days for Administrator Approval~~~~
		 <br/><br/> <br/><br/>
		 
		<h2 style="color:black">Thank You <?php echo $_POST['firstname']; ?> </h2><br/><br/>  
		 
        <p style="color:black">You have been registered as a Delivery Rider . We will contact you immediately
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </p>

        <p style="color:black" >Go <a href="DelRider_Register.php">back</a> to the form</p></center><br/><br/> <br/><br/>
		
		
		
    <?php else: ?>

            <center><h2 style="color:red">Delivery Riders Registration Form</h2></center>

            <form action="DelRider_Register.php" method="POST">
 
				
				<b>Basic Information</b><br/><br/>
				First Name:<br/>
				<input type="text" name="firstname" placeholder="First Name" required><br/><br/>
				
				Last Name:<br/>
				<input type="text" name="lastname" placeholder="Last Name" required><br/><br/>
				Address :<br/>
					<input type="text" name="Address" rows="8" cols="50" placeholder="Address" required><br/><br/>
				Identity Card No:<br/>
				<input type="text" name="IDno" placeholder="IdentityCardNo" required><br/><br/>
				
				<b> Contact Information</b> <br/><br/>
				
				Telephone Number:<br/>
				<input type="text" name="moboileno" pattern="[0-9]{10}"placeholder="Mobile Number" required ><br/><br/>
				
				Email Address:<br/>
				<input type="text" name="email" placeholder="abc@gmail.com" pattern= "[a-z0-9._+-%]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br/><br/>
				
				Password :<br/>
				<input type="text" name="pw" id="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
				title="Must contain at least one number and one uppercase and lowercase letter,
				and at least 8 or more characters" required><br/><br/>
				
				Re-enter Password :<br/>
				<input type="text" name="repw"id="cnfrmpwd" placeholder="Re-enter password" required><br/><br/>
				<br/><br/>
				
				
				I agree to the Terms and Conditions & Privacy Policy 
				<input type="checkbox" id="checkbox" class="inputStyle" onclick="enableButton()"> <br/><br/>
 
				<input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>

     <?php endif; ?> 
	<hr>
 
  <!-- Footer Section starts Here -->
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
  	 				<li><a href="indexNew.html">Home</a></li>
  	 				<li><a href="FAQs.html">FAQ</a></li>
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