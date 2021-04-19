
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>			
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<link rel="stylesheet" href="style.css">
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

/* Set a style for all buttons */
button {
  background-color: ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 40%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #ff8200;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
    <style>
        .nav-item{
          word-spacing:40px;
            padding-right: 30px;
            
            color:black;
         }
        .nav-link{
            color:black;
        }
       
     @media screen and (max-width: 992px) {
          .nav-item{
             background-color:blueviolet;
              color: white;
              width:100%;
  }
}
     @media screen and (max-width:800px) {
          .nav-item{
             background-color:green;
              color: darkred;
              width:100%;
  }
}
        .navbar-nav{
            float:right;
       
        }
        .item{
            max-width: 100%;
            height: 400px;
        }
        .carousel-caption{
            color:greenyellow;
        }
        
       
        .navbar-brand{
            width: 20px;
            height: 20px;
        }
        
    h3{
    font-size: 40px;
        text-align: center;
        padding-bottom: 40px;
        }
    </style>
      <style>
body {margin:0;height:1000px;}

.icon-bar {
  position: fixed;
  top: 70%;
    left:95%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
          }

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
   
    
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
   
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: green;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background:red;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
         h1 {
  color: white;
  text-shadow: 2px 2px 4px #000000;
             text-align: center;
}
          .card-title{
              text-align: center;
              color: darkorange;
              font-size: 20px;
          }
</style>




</head>
<body>
<!--
   
	<h1 style="text-align:center;">OUR PRODUCTS DETAILS</h1>
	<div class="main-div">
	  <div class="table-responsive p-5 ">
		<table style="border:3px solid black; background-color:lightgreen; width:1000px">
		
     <thead>
		<tr style="border:3px solid red;">
			<th style="boder:1px solid black; width:30px;"> product_id  </th>
			<th style="padding-left:30px;">product_name</th>
			
		
			
         
			
			<th style="padding-left:10px; padding-right:10px;">product_price</th>
	
			<th style="padding-left:10px; padding-right:10px;">product_quantity</th>
			<th style="padding-left:10px; padding-right:10px;">images</th>
			
	
			
		</tr>
		
			</thead>
			<tbody>
                -->
           <?php
    include 'header.php';
				

 include 'links.php';
	?>
<?php
//print_r($_SESSION['cart']);
    
    ?>

<h1>SEEDS</h1>


    <div class="container">
      <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form action="cart.php" method="post">
            <div class="card shadow">
              <div>
                <img src="images/seed1.jpg" alt="image" class="img-fluid card-img-top" style="height:210px;">
                
                </div>
              <div class="card-body">
                <h5 class="card-title">All type seeds</h5>
                  <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </h6>
                  <p class="card-text">
                 
                  
                  </p>
                  <h5>
                      <small><s class="text-secondary">$519</s></small>
                  <span class="price">$599</span>
                  
                  </h5>
                  
                  <button type="submit" class="btn btn-warning my-3" name="add_to_cart">add to Cart<i class="fas fa-shopping-cart"></i></button>
                  
                </div>
              
              </div>
            
            </form>
          
          
          </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
           <form action="cart.php" method="post">
            <div class="card shadow">
              <div>
                <img src="images/AS.jpg" alt="image" class="img-fluid card-img-top">
                
                </div>
              <div class="card-body">
                <h5 class="card-title">fruits seeds</h5>
                  
                  <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </h6>
                  <p class="card-text">
                 
                  
                  </p>
                  <h5>
                      <small><s class="text-secondary">$519</s></small>
                  <span class="price">$599</span>
                  
                  </h5>
                  
                  <button type="submit" class="btn btn-warning my-3" name="add_to_cart">add to Cart<i class="fas fa-shopping-cart"></i></button>
                                  </div>
              
              </div>
            
            </form>
          
          
          
          </div>
           <div class="col-md-3 col-sm-6 my-3 my-md-0">
           <form action="cart.php" method="post">
            <div class="card shadow">
              <div>
                <img src="images/cs.jpg" alt="image" class="img-fluid card-img-top" style="height:210px;">
                
                </div>
              <div class="card-body">
                <h5 class="card-title">vegetable seeds</h5>
                  <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </h6>
                  <p class="card-text">
                
                  
                  </p>
                  <h5>
                      <small><s class="text-secondary">$519</s></small>
                  <span class="price">$599</span>
                  
                  </h5>
                  
                  <button type="submit"class="btn btn-warning my-3" name="add_to_cart">add to Cart<i class="fas fa-shopping-cart"></i></button>
                  
                </div>
              
              </div>
            
            </form>
          
          
          
          </div>
          
                    <div class="col-md-3 col-sm-6 my-3 my-md-0">
           <form action="cart.php" method="post">
            <div class="card shadow">
              <div>
                <img src="images/ds.jpg" alt="image" class="img-fluid card-img-top" style="height:210px;">
                
                </div>
              <div class="card-body">
                <h5 class="card-title">onion seeds</h5>
                  <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </h6>
                  <p class="card-text">
                  some text
                  
                  </p>
                  <h5>
                      <small><s class="text-secondary">$519</s></small>
                  <span class="price">$599</span>
                  
                  </h5>
                  
                  <button type="submit"class="btn btn-warning my-3"  name="add_to_cart">add to Cart<i class="fas fa-shopping-cart"></i></button>
                  
                </div>
              
              </div>
            
            </form>
          
          
          
          </div>
        
        
        </div>
    
    </div>
    
   
  <h1>fruits</h1>
	
    
	
    <?php
    include "connect.php";
    
    ?>
      <div class="container">
     <div class="row">
    <?php  
   
    
    
        
$squery = "select * from products_items";

$query = mysqli_query($con, $squery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

   
    
  //  $product = mysqli_fetch_array($queryfire);
    
      
        
              
          
    while($res = mysqli_fetch_array($query)){
       
    ?>
         
   <br>
    <div class="col-lg-3 col-md-3 col-sm-12">
<!--        <form method="post" enctype="multipart/form-data" action="blog.php?action=add$id=<php echo $res["id"]; ?>">-->
       
        <form method="post" enctype="multipart/form-data" action="">
        <div class="card" style="height:500px;">
           
            <h6 class="card-title"  ><?php  echo $res['product_name']; ?></h6>
           
            <div class="card-body">
             <img src="images/<?php echo $res['images']; ?>" >
                
                <h5 style="text-align:center;color:yellow"> &#8377; 
                    <?php  echo $res['product_price']; ?></h5>
               
                <h5  style="text-align:center">
                    <?php  echo $res['product_quantity']; ?>
                </h5>
                       
                <input type="text" name="quantity" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $res["product_name"];   ?>"/>
               <input type="hidden" name="hidden_price" value="<?php echo $res["product_price"];   ?>"/>

                
                <h5  style="text-align:center">  <?php  echo $res['discount']; ?> off</h5>
             <div class="btn-group d-flex">
                
                 <input type="submit" class="btn btn-success"  name="add_to_cart1" href="" value="Add to cart" >
                 <!--<button type="submit" class="btn btn-warning" name="buy">BUy Now</button> -->
                
                </div>
                
           <!--     <button type="submit"class="btn btn-primary" name="add">add to Cart<i class="fas fa-shopping-cart"></i></button>
          -->
            </div>
        
            </div>
    
        </form></div>
          </div></div>
    
    
    <?php
session_start();

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
 }
 
 }
}
?>
    <body>
    <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart1.php"><img src="cart-icon.png" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
        
?>
<?php
$result = mysqli_query($con,"SELECT * FROM `products_item`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
    
    </body>
    </body></html>