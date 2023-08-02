<?php

//create parameters to make connection with database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "foodnfeed";

$conn = mysqli_connect($server, $username, $password, $dbname);

//check whether form is clicked on submit or not
if(isset($_POST['Submit'])){
    
    //fetch the values from the form 
    $quality = $_POST['quality'];
        
    //create a query
    $query = "insert into cus_review(ServiceQuality) values('$quality')";

    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

    //check whether query is working or not
    if($run){
        echo "Review submitted successfully";
    }

    else{
        echo "Review not submitted";
    }
}

?>