<?php
session_start();

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['cardname'])      )
{   
    $totalPrice = "Rs. ".$_GET['total'];

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);
    $cardname = validate($_POST['cardname']);
    $cardno = validate($_POST['cardno']);
    $exdate = validate($_POST['exdate']);
    $ccv = validate($_POST['ccv']);
    $total = validate($totalPrice);

    $user_data = 'name='. $name;

    // $sql = "INSERT INTO payment(name, phone, address, cardname, cardno, exdate, ccv, total) VALUES('$name', '$phone', '$address', '$cardname', '$cardno', '$exdate', '$ccv', '$total')";
	// $res = mysqli_query($conn, $sql);  

    // if (empty($name)) {
	// 	header("Location: index.php?page=payment.php?error=Name is required&$user_data");
	//     exit();
    // }
    // elseif(empty($phone)){
    //     header("Location: payment-form.php?error=Phone number is required&$user_data");
	//     exit();
    // }
    // else {
    $sql = "INSERT INTO payment(name, phone, address, cardname, cardno, exdate, ccv, total) VALUES('$name', '$phone', '$address', '$cardname', '$cardno', '$exdate', '$ccv', '$total')";
    $res = mysqli_query($conn, $sql);

		if ($res) {
            header("Location: index.php?page=payment.php?error=Your payment is successfully!&$user_data");
            session_destroy();
            //echo "Your payment is successfully!";
            //echo '<script>alert("Your message was sent successfully!")</script>';
		}else {
            $user_data1 = "name=invalid";
            header("Location: index.php?page=payment.php?error=Your payment is not received!&$user_data1");
            // echo '<script>window.location="payment.php?page=cart"</script>';
			//echo '<script>alert("Your payment could not be receive!")</script>';
		}
    //}
}else {
    header("Location: index.php?page=paymentAction");
}
?>