<?php
session_start();

if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"])){
      $item_array_id = array_column($_SESSION["shoping_cart"],"item_id");
     
      if(!in_array($_GET["id"], $item_array_id))
      {
          
          $count =count($_SESSION["shoping_cart"]);
          
          
    $item_array=array(
        'item_id'  => $_GET["id"],
          'item_name' => $_GET["hidden_name"],
             'item_price' =>$_POST["hidden_price"],
             'item_quantity' =>$_POST["quantity"]
        );
           $_SESSION["shopping_cart"][$count] = $item_array;

      }
              else{
                  
                  echo'<script>
                  alert("Item Already Added")
                  
                  
               </script>';
                  echo'<script>
                  alert("window.location="cart.php")
                  
                  
               </script>';
              }
          }
        

        else{
            
        

    $item_array=array(
        'item_id'  => $_GET["id"],
          'item_name' => $_POST["hidden_name"],
             'item_price' =>$_POST["hidden_price"],
             'item_quantity' =>$_POST["quantity"]
        );
          
    
    $_SESSION["shopping_cart"][0] = $item_array;
    }
}


if(isset($_GET["action"])){
    
    if($_GET["action"] == "delet"){
        
        foreach($_SESSION["shoping_cart"]as $key => $values)
            if($values["item_id"] == $_GET["id"]){
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>
                
                alert("item Removed")
                
                
                </script>';
                 echo '<script>
                
                window.location="cart.php"
                
                
                </script>';
            }
    }
}

?>



<div style="clear:both"></div>      
    
                     <br/>
         <h3>Order Details</h3>
         <div class="table-responsive">
         <table class="table table-bordered">
             <tr>
             <th>Item Name</th>
             <th>quantity</th>
             <th>price</th>
             <th>Total</th>
                 <th>Action</th>
             </tr>
             
             <?php
             
             if(!empty($_SESSION["shopping_cart"]))
             {
             
                 //
                 $total =0;
         foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                 ?> 
             <tr>
             <td><?php echo $values["item_name"]; ?></td>
              <td><?php echo $values["item_quantity"]; ?></td>
                  <td><?php echo $values["item_price"]; ?></td>
                  <td>
            <?php 
         echo number_format ( $values["item_quantity"] * $values["item_price"], 2); ?></td>
             
         <td><a href="cart.php?action=delet&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
             </tr>
            <?php 
             
             $total = $total +($values["item_quantity"] * $values["item_price"]);
             
             }
            ?>  
               <tr>
             
             <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?>  </td>       
           </tr>  
              <?php 
             
               }
             
             ?>
             
             </table>
         
         </div>
        
                
           
    
   <!--
         
if(isset($_POST["add_to_cart"]))
{
    
if(isset($_SESSION["shopping_cart"]))
{
    

        if(isset($_SESSION["shopping_cart"]))
            {
           
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            
                                                    if(!in_array($_GET["id"],$item_array_id))
                                                             {
                                                        $count = count($_SESSION["shopping_cart"]);

                                                   $item_array = array(
                                                    'item_id' => $_GET["id"],
                                                  'item_name' => $_POST["hidden_name"],
                                                 'item_price' => $_POST["hidden_price"],
                                              'item_quantity' => $_POST["quantity"]

                                                     );
            
            
               
       $_SESSION["shopping_cart"][$count]=$item_array;   
                
            }
        
            else
            {
               
                echo'<script>
                alert("item already added")
                
                </script>';
                echo'<script>
                
               window.location="blog.php"
                
                </script>';
                
                
            }
        }
        
        else
        {
          $item_array = array(
           'item_id' => $_GET["id"],
        'item_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
       'item_price' => $_POST["hidden_price"],
     'item_quantity' => $_POST["quantity"]
            
           );
           $_SESSION["shopping_cart"][0] = $item_array;
              
           
        
       }
}
            
  
          
       



    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delet")
        {
          foreach($_SESSION["shopping_cart"] as $keys => $values) 
          {
             if($values["item_id"] == $_GET["id"]) 
             {
                unset($_SESSION["shopping_cart"][$keys]); 
                  echo '<script> alert("Item Removed") </script>';
                 echo '<script>window.location="blog.php"  </script>';
             }
          }
        }
    }
}
    <br/>
-->

<?php
session_start();
 
if(isset($_POST["add_to_cart"]))
{
 if(isset($_SESSION["shopping_cart"]))
 {
 $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
 if(!in_array($_GET["id"], $item_array_id))
 {
 $count = count($_SESSION["shopping_cart"]);
 $item_array = array(
 'item_id' => $_GET["id"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][$count] = $item_array;
 }
 else
 {
 echo '<script>alert("Item Already Added")</script>';
 }
 }
 else
 {
 $item_array = array(
 'item_id' => $_GET["id"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'item_quantity' => $_POST["quantity"]
 );
 $_SESSION["shopping_cart"][0] = $item_array;
 }
}
 
if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 if($values["item_id"] == $_GET["id"])
 {
 unset($_SESSION["shopping_cart"][$keys]);
 echo '<script>alert("Item Removed")</script>';
 echo '<script>window.location="blog.php"</script>';
 }
 }
 }
}
 
?>

 <?php
 
     if(!empty($_SESSION["shopping_cart"]))
 {
 $total = 0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
 ?>
 <tr>
     <td></td>
 <td><?php echo $values["item_name"]; ?></td>
 <td><?php echo $values["item_quantity"]; ?></td>
 <td> <?php echo $values["item_price"]; ?></td>
 <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
 <td><a href="blog.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
 </tr>
 <?php
 $total = $total + ($values["item_quantity"] * $values["item_price"]);
 }
 ?>
 <tr>
 <td colspan="3" align="right">Total</td>
 <td align="right">$ <?php echo number_format($total, 2); ?></td>
 <td></td>
 </tr>
 <?php
 }
 ?>
 