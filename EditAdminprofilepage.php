<html>
    <head>
        <title>Edit Admin Profile- foodnfeed.com</title>
        <link rel = "icon" href ="Images/FoodnFeed Logo.png" type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
	<link rel="stylesheet" type="text/css" href="styles/EditAdminprofileSTYLES.css">
        <link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>

    <body>
        <div class="navbar">

        <a class="active" href="indexNew.html">Home</a>
                <a href="Menu.html">Menu</a>
                <a href="AboutUs.html">About Us</a>
                <a href="ContactUs.html">Contact Us</a>
            
          
        </div><br/>

        <div class="container">
            <div class="navigation">
                <ul>
                    <li class="Dashtitle">
                        <a href="#">
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="DB">
                        <a href="#">
                            <img src="Images/userpic.jpg" class="piccircle" width="150">
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">New delivery rider registrations</span>
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">New restaurant registrations</span>
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">Review customer feedback</span>
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">Edit special offers  </span>
                            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">Remove restaurant</span>
                            <span class="icon"><ion-icon name="trash-outline"></ion-icon></span>
                        </a>
                    </li>

                    <li class="DashB">
                        <a href="#">
                            <span class="title">Reports</span>
                        </a>
                    </li><br/>
                </ul>
            </div>

            <!--main-->
            <div class="main">
                <br/>
                <div class="topbar">
                    <br/>
                    <div class="user">
                        <img src="Images/pic1.jpg" class="userpicture" width="60">
                    </div>
                </div>

                <h1 ><center>Admin user profile</center></h1>

                <br/>
                <h3>Profile Infromation</h3>

                <div class="editcard">
                    <form action="" method="POST">
                        <div class="editprofile">
                            
                            <label for="name"><b>Name:</b></label>
                            <input type="text" name="name"><br/><br/>

                            <label for="username"><b>Username:</b></label>
                            <input type="text" name="username"><br/><br/>

                            <label for="userID"><b>UserID:</b></label>
                            <input type="text" name="userID"><br/><br/>

                            <label for="email"><b>Email address:</b></label>
                            <input type="email" name="email"><br/><br/>

                            <label for="mNO"><b>Mobile Number:</b></label>
                            <input type="password" name="mNO"><br/><br/>

                            <input type="submit" name"Create" value="Update Profile">
                            <?php
                                if(isset($_POST['Create'])){
                                    echo 'Update your profile successfully';
                                }
                            ?>
                        </div>
                    </form>
                </div>

            </div>

        </div><br/>

        <footer class="footer">
  	 
            <div class="row">
                <div class="footer-col">
                 <h4>Popular Categories</h4>
                 <ul>
                 <li><a href="Sri Lankan.html">Sri Lankan</a></li>
                         <li><a href="Indian.html">Indian</a></li>
                         <li><a href="Indian.html">Italian</a></li>
                         <li><a href="Vegetarian.html">Vegetarian</a>
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