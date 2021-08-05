<?php
error_reporting(0);
?>
<?php

	if (isset($_POST['upload'])) {

		$filename = $_FILES["uploadfile"]["name"];

		$pid = $_POST['pid'];
		$pname = $_POST['pname'];
		$pprice = $_POST['pprice'];
		$pstock = $_POST['pstock'];
		$pcat = $_POST['pcat'];
		$pinfo = $_POST['pinfo'];
		
		
		$db = mysqli_connect("localhost", "root", "", "samshai");
		
			$sql = "INSERT INTO products VALUES ('$pid', '$pname', '$pprice', '$pstock', '$filename', '$pcat', '$pinfo')";
			// Execute query
			mysqli_query($db, $sql);
			header("Location: ../index.php?page=products");
	}

?>
