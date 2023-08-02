<?php
    session_start();
    $db_name = "foodnfeed";
    $connection = mysqli_connect("localhost","root","",$db_name);

    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["quantity"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="shoppingcartFnF.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="shoppingcartFnF.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="shoppingcartFnF.php"</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel = "icon" href ="images/FoodnFeed Logo1.png" type = "image/x-icon">

    <link rel="stylesheet" type="text/css" href="styles/Homepagestyles.css">
    <link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
    <link rel="stylesheet" type="text/css" href="styles/shoppingcart.css">
    <link rel="stylesheet" type="text/css" href="styles/OrderNow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <style>
        .product{
            border: 1px solid #eaeaec;
            margin: 2px 2px 8px 2px;
            padding: 10px;
            text-align: center;
            background-color:#efefef;
        }
        table,th,tr{
              text-align: center;
              font-weight: bold;
        }
        .title2{
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            color: darkgreen;
            background-color:black;
            padding: 1%;

        }
        h2{
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            color:darkgreen;
            background-color: black;
            padding: 1%;
        }
        
        table th{
            background-color:#b8b8b8;
        }

        table tr{
            
            background-color:#b8b8b8;

        } 

        .table table-bordered{
            background-color:#484848;
        }

        
        .search input[type=text]{
            width:300px;
            height:45px;
            border-radius:25px;
            border: none;
  
        }
          
        .search{
            float:right;
            margin:1px;
  
        }
          
        .search button{
            background-color: green;
            color: #f2f2f2;
            float: right;
            padding: 5px 10px;
            margin-right: 12px;
            font-size: 12px;
            border: none;
            cursor: pointer;

        }

        body{
              background-image: url(images/back.jpg);
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
         }
         a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}


         

    </style>
</head>

<body>

<div class="navbar">
    <a class="active" href="indexNew.html">Home</a>
    <a href="#news">Menu</a>
    <a href="#aboutus">About Us</a>
    <a href="#contactus">Contact Us</a>
   
   <div class="search">
            <form action="#">
                <input type="text"
                    placeholder=" Search Menus"
                    name="search">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 15px;">
                    </i>
                </button>
            </form>
        </div>
   </div>
    

   <center>
        <div class="content">
        
           <h1 style="color:#04AA6D; padding-top:20px;">Food n Feed</h1>
              
            <b>A Online Food Delivery Portal for You....
            </b><hr></center>
        </div>


    <div class="container" style="width:1800px">

    <br><br>
        <h2>Shopping Cart</h2>

        <br><br>

        <?php

            $query = "select * from shoppingcart order by id asc";

            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){

                    ?>



                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="shoppingcartFnF.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>"  class="img-responsive">
                                <h5 class="text-info"><?php echo $row["description"];?></h5>
                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                <input type="text" name="quantity" class="form-control" value="0">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 9px;" class="btn btn-success" value="Add to cart">
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>

        <div style="clear: both"></div>

        <br><br>


        <h3 class="title2">Shopping Cart Details</h3>

        <br>

        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Description</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
<!--Shopping cart details-->
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                    ?>
                <tr>
                        <td><?php echo $value["product_name"];?></td>
                        <td><?php echo $value["product_quantity"];?></td>
                        <td><?php echo $value["product_price"];?></td>
                        <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="shoppingcartFnF.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
                ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"><?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </div>

    <!--order button-->
    <button class="button" ><a href="OrderNow.html">Order Now</a></button>

    <br><br><br>

    <footer class="footer">
  	 
  	 	<div class="row">
  	 		<div class="footer-col">
				<h4>Popular Categories</h4>
				<ul>
					<li><a href="Sri Lankan.html">Sri Lankan</a></li>
					<li><a href="Indian.html">Indian</a></li>
					<li><a href="Italian.html">Italian</a></li>
					<li><a href="Vegetarian.html">Vegetarian</a></li>
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

	 <center><p style="color:white; font-size:10px">&COPY;2022 foodnfeed.com. All Rights Reserved.</p></center>
  </footer>          
 

</body>
</html>