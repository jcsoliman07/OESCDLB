<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Welcome Home</title>
   <link rel="stylesheet" href="css/style.css" />

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<div class="form">
<?php
   include "db.php";
   $username = $_SESSION['username'];
   $sql = mysqli_query($con,"SELECT * FROM tb_instructor WHERE `username` = '$username'");

   while ($rows = mysqli_fetch_array($sql)) {
      echo "<input type='hidden' value='".$rows['ins_id']."'>";
?>



   <nav class="navbar navbar-inverse">
     <div class="container my-5">
       <div class="navbar-header">
         <a class="navbar-brand" href="#"><p><?php echo $_SESSION['username']; ?></p></a>
       </div>
       <ul class="nav navbar-nav">
         <li class="active"><a href="index.php">Home</a></li>
         <li><a href="Student/Grade/student.php?id=<?=$rows['ins_id']?>">Student</a></li>
         <li><a href="logout.php">Logout</a></li>
       </ul>
     </div>
   </nav>
<?php
   }
?>


   

   <div class="container">
      <p><h3>Welcome <?php echo $_SESSION['username']; ?>!</p>
   </div>
</div>
</body>
</html>