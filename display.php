
<html>
<head>
		
	<style>
    
        th{
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 10px;
            padding-right: 10px;
        }
        td{
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 30px;
            
        }
    </style>
	</head>
<body>
	<h1 style="text-align:center;">display the former details</h1>
	<div class="main-div">
	  <div class="table-responsive p-5 ">
		<table style="border:3px solid black; background-color:lightgreen; width:1000px">
		
     <thead>
		<tr style="border:3px solid red;">
			<th style="boder:1px solid black; width:30px;"> id  </th>
			<th style="padding-left:30px;">name</th>
			<th>email</th>
		
			<th>password</th>
            <th style="padding-left:10px; padding-right:10px;">number</th>
			
			<th style="padding-left:10px; padding-right:10px;">price</th>
	
			<th style="padding-left:10px; padding-right:10px;">products</th>
			
	<th></th>
			
		</tr>
		
			</thead>
			<tbody>
			<?php
				
 include 'connect.php';
 include 'links.php';
				
  
$selectquery = "select * from former";

$query = mysqli_query($con, $selectquery);

$num = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);


while($res = mysqli_fetch_array($query)){

	
	?>
	
		<tr>
			<td><?php echo $res['id']; ?></td>
		
			
			<td><?php echo $res['name']; ?></td>
			
		
			<td><span><?php echo $res['email']; ?></span> </td>
			
			    <td><?php echo $res['password']; ?> </td>
			
			  <td style="padding-left:30px"><?php echo $res['number']; ?> </td>
			<td style="padding-left:30px"><?php echo $res['price']; ?></td>
		  <td style="padding-left:30px"><?php echo $res['products']; ?></td>
	      
		
		
				
	<td>
        
		<a href="update.php?id=<?php echo $res['id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit"  aria-hidden="true"></i></a>	</td>	 
			
	
				
	<td>
		<a href="delete.php?id=<?php echo $res['id']; ?>"  data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash"  aria-hidden="true"></i></a>	</td>	
				</tr>
	
<?php	
	
}

?>
                
				
			</tbody>
		</table>
		</div>
	</div>
	
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
	
	</body>

</html>