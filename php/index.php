
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System</title>
    <link rel="stylesheet" href="./style.css">
    
    <style>
    body{
    background-image:url(back2.jpg);
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
    }
    </style>
</head>
<body>


    <!-- Messages -->
    <?php
        if(isset($_GET["err"])){
            // Both forms related messages
            if($_GET["err"] === "empty_inputs"){
                echo "<p class='msg' style='background-color: #ee2222;'>All the input fields must be filled!</p>";
            }
            else if($_GET["err"] === "invalid_name"){
                echo "<p class='msg' style='background-color: #ee2222;'>Both names must be written in only letters!</p>";
            }
            else if($_GET["err"] === "invalid_email"){
                echo "<p class='msg' style='background-color: #ee2222;'>A proper email must be entered!</p>";
            }
            else if($_GET["err"] === "invalid_mobile"){
                echo "<p class='msg' style='background-color: #ee2222;'>Mobile number must be 10 digit long & start with 0!</p>";
            }
            else if($_GET["err"] === "invalid_password"){
                echo "<p class='msg' style='background-color: #ee2222;'>Password must be at least 5 characters long!</p>";
            }
            else if($_GET["err"] === "different_pass"){
                echo "<p class='msg' style='background-color: #ee2222;'>Both passwords must be matched!</p>";
            }
            else if($_GET["err"] === "available_emailormobile"){
                echo "<p class='msg' style='background-color: #ee2222;'>Email & mobile number must be be brand new!</p>";
            }
            else if($_GET["err"] === "failedstmt"){
                echo "<p class='msg' style='background-color: #ee2222;'>Failed to execute the query!</p>";
            }

            // Register form related message
            else if($_GET["err"] === "noerrors"){
                echo "<p class='msg' style='background-color: #25aa25;'>Successfully registered!</p>";
            }

            
        }
    ?>
    <!-- Forms -->
    <div class="forms">
        

        <!-- Register Form -->
        <form action="./includes/register.inc.php" method="post" class="register">
            <h2>Customer Registration Form </h2>
            <input type="text" name="fname" placeholder="Enter Your First Name...">
            <input type="text" name="lname" placeholder="Enter Last Name...">
            <input type="text" name="email" placeholder="Enter Your Email...">
            <input type="text" name="mobile" placeholder="Enter Your Mobile...">
            <input type="password" name="pass" placeholder="Enter Your Password...">
            <input type="password" name="re_pass" placeholder="Enter Your Password Again...">
            <button type="submit" name="register-btn">Register</button>
        </form>
    </div>
   
    <h3 ><center>Already Have an Account ?</center></h3>
    <center><a href="#SignIn">Sign In</a></center>
        <br><br>
    <h2><a href="indexNew.html">Go Back to Home Page</a></h2>

    

</body>
</html>