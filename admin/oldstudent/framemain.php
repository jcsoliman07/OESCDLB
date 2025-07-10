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

</head>
	<frameset rows = "20%,*" border="0" scrolling="no" noresize>
      <!-- <frame name = "frame_nav"/> -->
      <frame name = "frame_nav" src = "topnav.php" />
      <frame name = "myFrame" src = "oldAB/oldab.php"/>
   </frameset>
<body>

</body>
</html>