<?php 
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'oescdlb') or die('Unable to connect!');

?>

<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Colegio de Los Baños</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Sign In</h3>
		      		</div>
		      	</div>
						<form action="index.php" method ="post" class="login-form" autocomplete="offs">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center" style="background: #044735;"><span class="fa fa-user"></span></div>
		      			<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center" style="background: #044735;"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <br/>
	            <div class="form-group d-flex align-items-center">
								<div class="w-100 d-flex justify-content-end" >
		            	<button type="submit" name="login" class="btn rounded submit" style="background: #044735; color: white;">Login</button>
	            	</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

<?php 
	
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username = '$username' AND password = '$password'");
		$row = mysqli_fetch_array($query);

		if (is_array($row)){
			$_SESSION["username"] = $row ['username'];
			$_SESSION["password"] = $row ['password'];
			$_SESSION["name"] = $row ['Name'];
		}else{
			echo "<script type='text/javascript'>alert('Invalid Username/Password!');window.location.href='index.php'</script>";
		}
	}
	if (isset($_SESSION["username"])) {
		header("Location:../mainframe.php");
	}

?>



	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

