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
    </head>
<body>
    

<style>
   /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
    
    
    @media only screen and (max-width: 600px) {
  img {
      max-width: 20%;
     
      max-height: 50px;
    
        }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  img {
      max-width: 25%;
     
      max-height: 70%;
    
        }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
 img {
      max-width: 50%;
  
      max-height: 75%px;
     
        }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  img {
      max-width: 50%;
     
      max-height: 100%;
      
        }
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
 img {
      max-width: 150%;
     
      max-height: 150%;
     
        }
    
    }
    
    img{
        max-width: 100%;
      max-height: 100%;
    }
    .card{
    height:400px;
    }
    
     h1 {
  color: darkslateblue;
  text-shadow: 2px 2px 4px #000000;
             text-align: center;
}
    </style>

	
	
    <?php
    include "connect.php";
    
    ?>
    <div class="container">
        <h1>Vegetables</h1>
    <div class="row">
        
      
    <?php  
   
    
    
        
$squery = "select * from vegetables";

$query = mysqli_query($con, $squery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

   
    
  //  $product = mysqli_fetch_array($queryfire);
    
        
        
        if($res > 0){
            
    while($res = mysqli_fetch_array($query)){
       
    ?>
    
    <div class="col-lg-3 col-md-3 col-sm-12">
        <form>
        <div class="card">
            <h6 class="card-title"><?php  echo $res['product_name']; ?></h6>
            <div class="card-body">
             <img src="images/<?php echo $res['images']; ?>">
                  <div class="">
                
                <h6 style="text-align:center;color:yellow"> &#8377;>  <?php  echo $res['product_price']; ?></h6>
                    
                      <h6 style="text-align:center">  <?php  echo $res['product_quantity']; ?></h6>
                       
                      <h6 style="text-align:center">  <?php  echo $res['discount']; ?></h6>
                    <div class="btn-group d-flex">
                
                <button class="btn btn-success flex-fill">Add to cart</button><button class="btn btn-warning flex-fill">BUy Now</button>
                
                </div>
                </div>
                 
            </div>
            </div>
        
             
        </form>
    
    </div>
      <?php
        
    }
            
        }
    
   
    
    ?>
        </div></div>
    <div class=""></div>
    
    
	
    
    
    
    
    
    
    
    
    
    
    
    
    </body>




</html>