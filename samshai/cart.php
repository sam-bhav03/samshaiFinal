<?php
    // check if form has been clicked
    if(isset($_POST['product_id']) && isset($_POST['quantity']))  {

        //convert to int and assigns to a variable
        $product_id = (int)$_POST['product_id']; 
        $quantity = (int)$_POST['quantity'];
        
        //sql to find all the product details
        $sql = "SELECT * FROM products WHERE id = '$product_id'";
        $result = $conn->query($sql);

        //product details assigned to an array
        while($row = $result->fetch_assoc()) {
            $products = array(
                'id'			=>	$product_id,
                'name'          => $row['name'],
                'quantity'		=>	$quantity,
                'stock'         => $row['stock'],
                'price'         =>  $row['price'],
                'img'           =>  $row['path']
            );
        }

        //check if session already exists
        if(isset($_SESSION["shopping_cart"])){
 
            //get the index of the array
            $productArrayID = array_column($_SESSION["shopping_cart"],"id");

            //check if the index already is in the array, then does not add the item again
            if(!in_array($product_id, $productArrayID))
            {
                //adds item for the first time
                $count = count($_SESSION["shopping_cart"]);
                $_SESSION["shopping_cart"][$count] = $products;
            }
            else{
                echo '<script>alert("Item Already Added")</script>';
            }
        }
        else{
            //session created for the first time
            $_SESSION["shopping_cart"][0] = $products;
        }
    } 

    if(isset($_GET["action"])){
		if($_GET["action"] == "delete"){
			foreach($_SESSION["shopping_cart"] as $keys => $values){
				if($values["id"] == $_GET["id"])
				{
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="index.php?page=cart"</script>';
                    // session_start();
				}
			}
		}
	}

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/styleCart.css">
    </head>
    <body>
    <div class="cart">
        <h1 class="header">Shopping Cart</h1>
        
 
            <table>
                <thead>
                    <tr>
                            <th width="20%">Product Name</th>
							<th width="4%">Quantity</th>
							<th width="5%">Price</th>
							<th width="5%">Total</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(empty($_SESSION["shopping_cart"])) { ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                    </tr>
                    <?php }
                        else{ 
                    ?>
                    <?php $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {   
                     ?>
                        <tr>
                            <td><?php echo $values['name']; ?></td>
                            <td>Rs. <?php echo $values['price']; ?></td>
                            <td><?php echo $values['quantity']; ?></td>
                            <?php $finalprice = $values['quantity'] * $values['price'] ?>
                            <td>Rs. <?php echo $finalprice; ?></td>
                            <td><a href="cart.php?action=delete&id=<?php echo $values["id"]; ?>"><span>Remove</span></a></td>
                        </tr>
                    <?php 
                        $total = $total + $finalprice;
                        } } 
                    ?>
                </tbody>

            </table>
            <div class="subtotal">
                <span class="text"> Total</span>
                <span class="price">Rs <?php echo $total ?></span>
            </div>
            
            <form action="index.php?page=payment&total=<?php echo $total?>" method="post"> 
                <div class="buttons">
                    <input type="submit" value="Checkout" name="checkout">
                </div>
            </form> 
 
    </div>
    </body>
</html>

