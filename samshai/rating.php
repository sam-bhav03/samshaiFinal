<?php 
if(isset($_POST)){
	$conn = mysqli_connect('localhost','root','','samshai');
	if(mysqli_query($conn,"INSERT INTO review_rating VALUES('".$_POST['v1']."','".$_POST['v2']."','".$_POST['v3']."')")){
		echo "1";		
	}else{
		echo "2";
	}
}
?>