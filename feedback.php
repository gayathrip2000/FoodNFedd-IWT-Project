<?php

//create parameters to make connection with database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "foodnfeed";

$conn = mysqli_connect($server, $username, $password, $dbname);

//check whether form is clicked on send or not
if(isset($_POST['Send'])){
    
    //check whether all input boxes are empty or not
    if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        
        //fetch the values from the form 
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //create a query
        $query = "insert into feedback(FullName,Email,Message) values('$fullname', '$email', '$message')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        //check whether query is working or not
        if($run){
            echo "Feedback submitted successfully";
        }

        else{
            echo "Feedback not submitted";
        }
    }

    else{
        
        //print an error message
        echo "All fields are required";
    }
}
?>