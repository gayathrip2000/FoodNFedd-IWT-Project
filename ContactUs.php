<?php

//create parameters to make connection with database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "foodnfeed";

$conn = mysqli_connect($server, $username, $password, $dbname);

//check whether form is clicked on submit or not
if(isset($_POST['Submit'])){

     //check whether all input boxes are empty or not
    if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['contactNo']) && !empty($_POST['subject']) && !empty($_POST['message'])){

        //fetch the values from the form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $contactNo = $_POST['contactNo'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

         //create a query
        $query = "insert into contacts(FullName,Email,ContactNo,Subject,Message) values('$fullname', '$email', $contactNo, '$subject', '$message')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

         //check whether query is working or not
        if($run){
            echo "Form submitted successfully";
        }

        else{
            echo "Form not submitted";
        }
    }

     //print an error message
    else{
        echo "All fields are required";
    }
}
?>