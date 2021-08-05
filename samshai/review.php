<!DOCTYPE html>
<html>
<head>
	<title>Rating system</title>
	<!-- Latest compiled and minified CSS -->
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- font awesome -->
  	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- rating star css -->
  	<link rel="stylesheet" href="css/ratingstar.css">  	
</head>
<body class="container">
<div class="row">
<div class="col-md-12">
	<form class="form-group">
		<div class="form-group has-success has-feedback">
		    <label for="name">User Name :</label>
		    <input type="text" class="form-control" id="name">		    
	  	</div>
	  	<div class="form-group has-success has-feedback">
		    <label for="message">Message :</label>
		    <input type="message" class="form-control" id="message">		    
	  	</div>	 
	    <label for="message">Rating :</label>	  	
	  	<div class='starrr' id='rating-student'></div> 	<br>
	  	<input type="button" id="submit" class="btn-btn-success" value="Send Review">
	  	<div class="msg"></div>
	</form>	
</div>
<hr>
<!-- show the student -->

<div class="details">
<h2>Ratings</h2>
<table class="table-table-condensed">
	<thead class="table">
	  <tr>
	    <th>User Name</th>
	    <th>Message</th>
	    <th>Rating</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
		$conn = mysqli_connect('localhost','root','','samshai');
		if($qry = mysqli_query($conn,"SELECT * FROM review_rating")){
			while($show = mysqli_fetch_assoc($qry)){
				echo "<tr>";
					echo "<td>".$show['name']."</td>";					
					echo "<td>".$show['message']."</td>";					
					if($show['rating']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
					if($show['rating']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rating']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
				echo "</tr>";
			}
		}
	?>
	</tbody>
</table></div>
	
</div>



<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- star js -->
<script src="js/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
  	rate = value;  	       
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){	
	var name = $('#name').val();
	var message = $('#message').val();	
	$.ajax({		
        url: "rating.php",
        type: 'post',
        data: {v1 : name, v2 : message, v3 : rate},
        success: function (status) {
        	if(status == 1){
            	$('.msg').html('<b style="color: blue"> Review Submitted !</b>');
        	}else{
            	$('.msg').html('<b>Review not submitted!</b>');        		
        	}
        }
    });

});
</script>
</body>
</html>
