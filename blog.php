
<?php
session_start();
 
if(isset($_POST["add_to_cart"]))
{
 if(isset($_SESSION["cart"]))
 {
 $item_array_id = array_column($_SESSION["cart"],"item_id");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["cart"]);
     
 $item_array = array(
 'item_id' => $_GET["id"],
 'item_name' => $_POST["product_name"],
 'item_price' => $_POST["product_price"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
      echo '<script>window.location="blog.php"</script>';
 }
     
     
 }
 else
     
 {
 $item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["product_name"],
 'item_price' => $_POST["product_price"],
 'item_quantity' => $_POST["quantity"]
);
 $_SESSION["cart"][0] = $item_array;
 }
}

if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["cart"] as $keys => $values)
 {
 if($values["i
 tem_id"] == $_GET["id"])
 {
 unset($_SESSION["cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="blog.php"</script>';
 }
 }
 }
}
 
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
          <form action="blog.php" method="post">
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
                  
                  <button type="submit" class="btn btn-warning my-3" name="add_to_cart" >add to Cart<i class="fas fa-shopping-cart"></i></button>
                  
                </div>
              
              </div>
            
            </form>
          
          
          </div>
         <div class="col-md-3 col-sm-6 my-3 my-md-0">
           <form action="blog.php" method="post">
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
           <form action="blog.php" method="post">
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
           <form action="blog.php" method="post" enctype="multipart/form-data">
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
   
    
    
        
$squery = "select * from  products_items ";

$query = mysqli_query($con, $squery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

   
     
  //  $product = mysqli_fetch_array($queryfire);
    
    
     
          
    while($res = mysqli_fetch_array($query)){
       
    ?>
         
   <br>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <form method="post" action="blog.php?action=add&pid=<?php echo $res["id"]; ?>"   enctype="multipart/form-data">
        <div class="card" style="height:600px;">
           
            <h6 class="card-title"><?php  echo $res['product_name']; ?></h6>
           
            <div class="card-body">
             <img src="images/<?php echo $res['images']; ?>" >
                
         <h5 style="text-align:center;color:yellow"> &#8377; 
                    <?php echo $res['product_price']; ?></h5>
               
                <h5  style="text-align:center">
     <?php  echo $res['product_quantity']; ?>
                </h5>
                       
                
                <input type="text" name="quantity" value="1" class="form_control">
                <input type="hidden" name="product_name" value="<?php echo $res["product_name"];   ?>"/>
               <input type="hidden" name="product_price" value="<?php echo $res["product_price"];   ?>"/>
                
                
                <h5  style="text-align:center"><?php  echo $res['discount']; ?> off</h5>
             <div class="btn-group d-flex">
                
                 <input type="submit" class="btn btn-success"  name="add_to_cart" href="blog.php"  value="Add to cart" >
                 <!--<button type="submit" class="btn btn-warning" name="buy">BUy Now</button> -->
                
                </div>
                
           <!--     <button type="submit"class="btn btn-primary" name="add">add to Cart<i class="fas fa-shopping-cart"></i></button>

          -->
            </div>
        
            </div>
    
        </form></div>
         <?php
    }
         
     
         ?>
          </div></div>
	
    
    <?php
    include "shop.php";
    
    ?>
    
    
   <div style="clear:both"></div>
 <br />
 <h3>Order Details</h3>
 <div class="table-responsive">
 <table class="table table-bordered">
 <tr>
         
     <th>SI.NO</th>
 <th width="40%">Item Name</th>
 <th width="10%">Quantity</th>
 <th width="20%">Price</th>
 <th width="15%">Total</th>
 <th width="5%">Action</th>
 </tr>
    
 <?php
 
     if(!empty($_SESSION["cart"]))
 {
 $total=0;
 foreach($_SESSION["cart"] as $keys => $values)
 {
 ?>
 <tr>
     <td></td>
 <td><?php echo $values["item_name"]; ?></td>
 <td><?php echo $values["item_quantity"]; ?></td>
 <td> <?php echo $values["item_price"]; ?></td> 
 <td> <?php echo number_format($values["item_quantity"] * $values["item_price"],2);?></td>
 <td><a href="blog.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
 </tr>
 <?php
 $total = $total + ($values["item_quantity"]*$values["item_price"]);
 }
         
 ?>
 <tr>
 <td colspan="3" align="right">Total</td>
 <td align="right">$ <?php echo number_format($total,2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
    
 </table>
 </div>
    <!--
<php
function array_column($array, $column_name)
{
    $output = array();
    
    foreach($array $key => $values)
    {
        $output[] = $values[$column_name];
    }
     return $output;
}
     ?>  --->
 <br/>
 </body>
</html>



