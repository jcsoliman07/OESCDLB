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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  	<style>

  		.breadcrumb{
  			padding: 15px;
  			letter-spacing: 2px;
  			background: rgba(1, 21, 15, 0.85);
  		}

  		.breadcrumb li{
  			margin-left: 20px;
  		}

  		.breadcrumb li a{
  			font-size: 1.5rem;
  			font-weight: bold;
  			text-decoration: none;
  			color: whitesmoke;
  		}

  		.breadcrumb li a:hover{
  			color: #dec348;
  			text-decoration: underline;
  		}

  		.breadcrumb li.active a{
  			color: #dec348;
  			text-decoration: underline;
  		}

  	</style>

</head>
<body>

<div class="container-fluid">
	<div class="my-content">
		<h2 class="display-1">Junior High School New Enrollees</h2>
		<div class="content">
			<ol class="breadcrumb">
			  	<li class="breadcrumb-item list active"><a href="jhs_7/index.php" target="myFrame">Grade 7</a></li>
			    <li class="breadcrumb-item list"><a href="jhs_8/index.php" target="myFrame">Grade 8</a></li>
			    <li class="breadcrumb-item list"><a href="jhs_9/index.php" target="myFrame">Grade 9</a></li>
			    <li class="breadcrumb-item list"><a href="jhs_10/index.php" target="myFrame">Grade 10</a></li>
			</ol>
		</div>
	</div>
</div>

<script>
	let list = document.querySelectorAll('.list');
	for (let i=0; i<list.length; i++){
		list[i].onclick = function (){ 
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		}
				
	}
</script>

</body>
</html>