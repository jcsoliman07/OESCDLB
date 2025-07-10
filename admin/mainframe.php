<?php
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<input type='hidden' value='".$_SESSION['username']."'";
	}
	else{
		header("Location:../mainlogin.php");
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator Panel</title>

</head>
	<frameset cols = "18%,*" border="2" noresize="off">
      <frame name = "frame_nav" src = "index.php"/>
      <frame name = "frame_body" src = "Home/home.php" />
   	</frameset>
</html>