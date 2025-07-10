<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" type="image/gif" href="logo.gif">
    
    <!------ Include the above in your HEAD tag ---------->
</head>
<body style="background-color: #006400;">
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
   $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
   $username = mysqli_real_escape_string($con,$username);
   $password = stripslashes($_REQUEST['password']);
   $password = mysqli_real_escape_string($con,$password);
   //Checking is user existing in the database or not
   $query = "SELECT * FROM tbl_instructor WHERE `username`='$username' and `password`='$password'";
   $result = mysqli_query($con,$query) or die(mysql_error());
   $rows = mysqli_fetch_array($result);
      if($rows['status']==1){
         $_SESSION['username'] = $rows['username'];
            // Redirect user to index.php
         header("Location: index.php");
      }
      else
      {
        echo "<script type='text/javascript'>alert('Your Account is Temporary Deactivated!');window.location.href='login.php'</script>";
   }
    }else{
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"></h1>
            <div class="account-wall">
                <p style="font-size: 400%; font-weight: 300; color: white; width: 200%; margin-left: -25%;">Colegio de Los Baños</p>
                <img class="profile-img" style="width: 50%; height: 170px; margin-left: 25%; margin-top: 20%;" src="logo.gif"
                    alt="">
                <form action="" class="form-signin" method="post" name="login" autocomplete="off">
                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
                <br/>
                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>

                <br/>
                <br/>
                <button class="btn btn-lg btn-success btn-block" name="Submit" type="submit" style="background: yellow; color: black;">Login</button>
                </form>
            </div>    
        </div>
    </div>
</div>
<?php } ?>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>