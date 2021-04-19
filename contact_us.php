
<!DOCTYPE html>


<html>
<head>
	 <link rel="stylesheet"
               href="./css/bootstrap.min.css">
        <script src="./js/jquery-3.3.1.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
       
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
    
    .row{
        background-color: white;
    }
    
    form{
        text-align: center;
       
    }
    .btn {
    width:100px; 
    }
    </style>
    	
	</head>
<body>
    <?php
    include "header.php";
    
    ?>
	
	<div class="container" style="border:2px solid white">
		<h1></h1><div class="form-group">
		<div class="row">
            <div class="col-7"></div>
            
			<div class="col-4" style="padding-top:10px;border:2px solid green;">
                <h2>GET IN TUCH WITH US</h2>
	<form action="" method="POST" enctype="multipart/form-data" >
	
		<input type="text" name="name" value="" placeholder="enter your name" style="width:350px" class="form-control"><br>
	
		<input type="email" name="email" value="" placeholder="enter your email" style="width:350px" class="form-control"><br>
		
		<input type="password" name="password" value="" placeholder="enter your password" style="width:350px" class="form-control"><br>
		
		<input type="number" name="number" value="" placeholder="number" style="width:350px" class="form-control"><br>
		
		<input type="date" name="date" value="" placeholder="date" style="width:350px" class="form-control"><br>
        
        <input type="time" name="time" value="" placeholder="time" style="width:350px" class="form-control"><br>

<select type="text" name="products" style="width:300px;"class="form-control" class="form-control">
    
    <option name="products"  value="vege" >vegetables
   
    
    </option>
    
       
        
    <option name="products" value="fruits" >fruits</option> 
    
  <option name="products" value="seeds">Seeds</option>
  <option name="products" value="flowers">flowers</option>

        </select> 
     
        <br>
			 
 <input type="submit" name="submit" class ="btn btn-warning" value="send" /> 
		<a href="blog.php"  class="btn btn-primary">view</a> 
		 
				</form>
			</div>  
				
				
		</div>
	</div>
    </div>
	</body>
</html>

	

<?php 
	include "connect.php";
	?>
<?php

	if(isset($_POST['submit'])){
		
		$name      =  $_POST['name'];
		$email     =  $_POST['email'];
		$password  =  $_POST['password'];
		$number =  $_POST['number'];
		$date    =  $_POST['date'];
        $time    =  $_POST['time'];
		$products   =   $_POST['products'];
	
	
$insertquery = "insert into former(name,email,password,number,date,time,products)
 values('$name','$email','$password','$number','$date','$time','$products')"; 
		
		
		//storing query
	$query = mysqli_query( $con,$insertquery);
		


	if($query ){
		?>
<script>
		alert("data inserted");
</script>
<?php
	}else{
		?>
<script>

		alert( "data not inserted");
</script>
<?php
	}
  }

		
	?>	