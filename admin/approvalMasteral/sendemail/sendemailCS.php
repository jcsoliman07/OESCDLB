<?php
	include "send_email.php";	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="hidden/css" href="../css/bootstrap.css"/>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

</head>
<body>

	<div class="container my-5">
		<div class="wapprer">
			<form method="POST" action="send_email.php" autocomplete="off">
	            <div class="form-group">
	                <label>Email:</label>
	                <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>" required="required" readonly/>
	            </div>
	            <div class="form-group">
	                <label>Subject</label>
	                <input type="text" class="form-control" name="subject" required="required"/>
	            </div>
	            <div class="form-group">
	                <label>Message</label>
	                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="7" required></textarea>
	            </div>

	            <input type="text" name="id" value="<?=$row['id']?>" hidden>
	            
	            <br>
	           	<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
	        </form>
    	</div>
	</div>


</body>
</html>