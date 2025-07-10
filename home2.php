 <?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","oescdlb");  
 if (!isset($_SESSION["username"])) {  
      header("location:mainlogin.php");  
      die();  
 }  
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>FACULTY</h1>
	<a class="nav-link" style="color: red;" href="logout.php">Logout</a>

</body>
</html>
