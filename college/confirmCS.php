<?php
	include "../db_conn.php";

	$status2=$_POST['status1']; // Fetching Values from URL
	$year2=$_POST['year1'];
	$course2=$_POST['course1'];
	$fname2=$_POST['fname1'];
	$lname2=$_POST['lname1'];
	$mname2=$_POST['mname1'];
	$suffix2=$_POST['suffix1'];

	$sql = "INSERT INTO `tbl_newstudent` (student_status, course, year, fname, lname, mname, suffix) VALUES ('$status2','$course2','$year2','$fname2','$lname2', '$mname2', '$suffix')";
	
		$result = mysqli_query($conn, $sql);

		if ($result) 
		{
			header("Location: enrollCS.php");
		}
		else
		{
			echo "Data not Inserted!";
		}	

?>

<!-- <?php
// Establishing connection with server by passing "server_name", "user_id", "password".
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database by passing "database_name" and above connection variable.
$db = mysqli_select_db("oescdlb", $connection);

$status2=$_POST['status1']; // Fetching Values from URL
$year2=$_POST['year1'];
$course2=$_POST['course1'];
$fname2=$_POST['fname1'];
$lname2=$_POST['lname1'];
$mname2=$_POST['mname1'];
$suffix2=$_POST['suffix1'];

$query = mysqli_query("insert into tbl_newstudent(student_status, course, year, fname, lname, mname, suffix) values ('$status2','$year2','$course2','$fname2','$lname2', '$mname2', '$suffix')"); //Insert query
if($query){
echo "Data Submitted succesfully";
}
mysqli_close($connection); // Connection Closed.
?>
 -->