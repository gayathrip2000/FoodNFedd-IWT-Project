
<html>
<head>
<title>User Profile - foodnfeed.com</title>
<link rel = "icon" href ="Images/FoodnFeed Logo.png" type = "image/x-icon">
<link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
<link rel="stylesheet" type="text/css" href="styles/UserprofileSTYLES.css">
<link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.top{
    background-image: url("Images/picture5.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 580px;
    margin: auto;
    text-align: center;
    background: rgba(216, 221, 149, 0.536);
    padding: 30px;
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
	</div>

	<div class ="top">
		<h1 ><center>User Profile</center></h1>
		<br/>

		<div class="card">
			<h3>User information</h3>
			<br/>
			<div class="userpic">
				<img src="Images/user.jpg" class="piccircle" width="150">
			</div><br/>
	
			<?php if (isset($_POST['form_submitted'])): ?>   You have submitted successfully
                <?php else: ?>
                    <form action="UserProfilePage.php" target="_blank" method="POST">
				        <p>Name:</p>
				        <input type="text" name="Name" placeholder="Name" ><br/>
				        <p>Date of birth:</p>
				        <input type="text" name="DOB" placeholder="DOB" ><br/>
				        <p>NIC:</p>
				        <input type="text" name="NIC" placeholder="NIC No" ><br/>
				        <p>E mail:</p>
				        <input type="text" name="email" placeholder="E mail" ><br/>
				        <p>Mobile Number:</p>
				        <input type="text" name="Mno" placeholder="Mobile Number" ><br/>
				        <p>Location:</p>
				        <input type="text" name="location" placeholder="Location" ><br/><br/>
				        <input type="submit" name"" value="Save Changes">
						<br/><br/><br/>
						<a href="MyPreviousOrders.html">See Previous Orders~~</a>
			        </form>
                <?php endif; ?>
			<br/>
		</div><br/>

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