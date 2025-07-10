<?php
	session_start();

	if (isset($_SESSION['username'])) {
		echo "<input type='hidden' value='".$_SESSION['username']."'";
	}
	else{
		header("Location:../../../mainlogin.php");
	}	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

	<frameset cols = "20%,*" border='1' noresize = "off">
      <!-- <frame name = "top" src = "index.php" /> -->
      <frame name = "frame_nav" src = "../../../admin/instructor/ins_dashboard.php" scrolling="auto"/>
      <frame name = "frame_body" src="schedule/index.php" />
   </frameset>

<body>


</body>
</html>