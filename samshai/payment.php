<?php
session_start();

    foreach($_SESSION["shopping_cart"] as $keys => $values){
        $newStock = $values['stock'] - $values['quantity'];
        $id = $values['id'];
        $sql = "UPDATE products SET stock=$newStock WHERE id=$id ";
        $result = $conn->query($sql);
    }
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Proceed To Payment</title>
	<link rel="stylesheet" href="css/stylePayment.css">

   <script>
		function validateForm() {
      var a = document.forms["payment"]["name"].value;
		var b = document.forms["payment"]["phone"].value;
		var c = document.forms["payment"]["address"].value;
		var d = document.forms["payment"]["cardname"].value;
		var e = document.forms["payment"]["cardno"].value;
		var f = document.forms["payment"]["exdate"].value;
		var g = document.forms["payment"]["ccv"].value;

        if ((a == "") || (b = "") || (c = "") || (d = "") || (e = "") || (f = "") || (g = "") ){
        alert("Fields shoul be filled");
        return false;
        }
    }
	</script>
</head>
<body>
    <?php
      $total = $_GET['total'];
    ?>
    
     <form name="payment" action="index.php?page=paymentAction&total=<?=$total?>" method="post">
     	<h2>Proceed To Payment</h2>

     	<?php if (isset($_GET['error'])) { ?>

     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <div class="banner"><h4>Customer Details</h4></div>

     	<label>Name</label>
     	<input type="text" class="text-box" name="name" placeholder="Full Name"><br>

     	<label>Phone Number</label>
     	<input type="text" class="text-box" name="phone" placeholder="Phone number"><br>

        <label>Address</label>
     	<input type="text" class="text-box" name="address" placeholder="Full Address"><br>

        <div class="banner">
        <h4>Billing Details</h4></div>
        
        <label>Card Holder</label>
     	<input type="text" class="text-box2" name="cardname" placeholder="Name on card"><br>

        <label>Card Number</label>
     	<input type="text" class="text-box2" name="cardno" placeholder="_ _ _ _  _ _ _ _  _ _ _ _  _ _ _ _"><br>

        <label>Expiration</label>
     	<input type="text" class="text-box1" name="exdate" placeholder="_ _/_ _">

        <label>CVC/CCV</label>
     	<input type="text" class="text-box1" name="ccv" placeholder="_ _ _"><br>

        <label class= "total">Total Price : Rs. <?php echo $total; ?> </label>

         <!-- <p class="text-box3" name="total"> <?php echo $total; ?> </p> -->

     	 <input type="hidden" class="text-box1" name="total" placeholder= "test" ><br>


     	<button type="submit">Comfirm Payment</button>
     </form>
</body>
</html>