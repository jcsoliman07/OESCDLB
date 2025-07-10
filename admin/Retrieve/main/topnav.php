<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  	<style>
  		body{
	    	animation: fadeInAnimation ease 0.5s;
		    animation-iteration-count: 1;
		    animation-fill-mode: forwards;
		}
	  
		@keyframes fadeInAnimation {
		    0% {
		        opacity: 0;
		    }
		    100% {
		        opacity: 1;
		     }
		}
  		#count{
		border-radius: 50%;
		position: relative;
		top: -8px;
		/*left: -10px;*/
		background-color: red;
	}
	.breadcrumb li a{
  			color: #044735;
  		}

  		.breadcrumb li:hover a{
  			color: #dec348;
  		}

  		.breadcrumb li.active a{
  			text-decoration: none;
  			color: #dec348;
  		}
  	</style>

</head>
<body>

	<div class="container-fluid">
		<div class="container">
			<h1 style="text-transform:uppercase;"><span class="far fa-clipboard"></span> Retrieved Data </h1>
      <hr class="bg-dark border-4 border-top">
		</div>
	</div>

</body>
</html>