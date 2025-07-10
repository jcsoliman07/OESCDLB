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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

  	<style type="text/css">
  		body{
		/*background-color: rgba(0, 0, 0, 0.15);*/
		    animation: fadeInAnimation ease 1s;
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
		<div class="my-content">
			<ol class="breadcrumb" style="font-weight: bold; font-size: 1.4rem; text-transform: uppercase; text-align:center;">
				<li class="breadcrumb-item list active" style="margin: 5px;"><a href="ab_subj/index.php" target="myFrame">AB - Econ</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bafinman_subj/index.php" target="myFrame">BSBA - FinMan</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bamarman_subj/index.php" target="myFrame">BSBA - Marketing</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="cs_subj/index.php" target="myFrame">BSCS</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bsedeng_subj/index.php" target="myFrame">BSE - English</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bsedfil_subj/index.php" target="myFrame">BSE - Filipino</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bsedmath_subj/index.php" target="myFrame">BSE - Math</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bsedscience_subj/index.php" target="myFrame">BSE - Science</a></li>
			    <li class="breadcrumb-item list" style="margin: 5px;"><a href="bee_subj/index.php" target="myFrame">BEE</a></li>
			</ol>
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