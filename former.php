
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
        background-color: forestgreen;
    }
    
    form{
        text-align: center;
       
    }
    </style>
    	
	</head>
<body>
	<h1 style="text-align:center;color:green;">customer details</h1>
	<div class="container" style="border:2px solid green;">
		<h1></h1><div class="form-group">
		<div class="row">
            
			<div class="col-6" style="padding-top:10px;">
	<form action="" method="POST" enctype="multipart/form-data">
	
		<input type="text" name="name" value="" placeholder="enter your name" style="width:400px" class="form-control"><br>
	
		<input type="email" name="email" value="" placeholder="enter your email" style="width:400px" class="form-control"><br>
		
		<input type="password" name="password" value="" placeholder="enter your password" style="width:400px" class="form-control"><br>
		
		<input type="number" name="number" value="" placeholder="number" style="width:400px" class="form-control"><br>
		
		<input type="date" name="date" value="" placeholder="date" style="width:400px" class="form-control"><br>
        
        <input type="time" name="time" value="" placeholder="time" style="width:400px" class="form-control"><br>

<select type="text" name="products" style="width:300px;"class="form-control" class="form-control">
    
    <option name="products"  value="vege" >vegetables </option>
    
        
    <option name="products" value="fruits" >fruits</option> 
    
  <option name="products" value="seeds">Seeds</option>
  <option name="products" value="flowers">flowers</option>

        </select> 
      <!-- <select type="text" name="products_items"  style="width:400px;">
         <option name="products_items" value="vege">
           
           <option  value="asparagus,carrot"></option>
             <li> cauliflower,</li>
             <li> corn,</li>
             <li> cucumber,</li>
                  <li> green pepper,</li></ol></option></select>
                
	<br>
        
           

        <select type="text" name="products_items"  style="width:400px;">  
    <option name="products_items" value="fruits">fruits
    
             <ol><li>carrot</li>
          <li>Apple,</li>
          <li>Apricots,</li>
          <li>Avocado,</li>
          <li>Banana,</li>
          <li>Blackberries,</li>
          <li>Blackcurrant,</li>
          <li>Blueberries,</li>
          <li>Breadfruit,</li></ol>
            </option></select>
    <select  type="text"  name="price"  placeholder="price" style="width:400px;">
  <option name="price"  value="90"> 90 Rs</option>
  <option name="price"  value="100">100 Rs</option>
  <option name="price"  value="200">200 Rs</option>
  <option name="price"  value="300">300 Rs</option>
</select>
		
		<br>--->
        <br>
			 
 <input type="submit" name="submit" class ="btn btn-primary" value="submit" /> 
		 <a href="display.php"  class="btn btn-primary"> DETAILS</a>
		 
				</form>
			</div>  
				
				<div class="col-4">
					<img src="images/f.jpg" name="images" value="">
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
		$price    =  $_POST['price'];
		$products   =   $_POST['products'];
	
	
$insertquery = "insert into former(name,email,password,number,price,products)
 values('$name','$email','$password','$number','$price','$products')"; 
		
		
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