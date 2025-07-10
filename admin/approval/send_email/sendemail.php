<?php
	
	if (isset($_GET['id'])) {
    include "../db_conn.php";

    function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Id = validate($_GET['id']);
        // echo $Id;
        $sql = "SELECT * FROM tbl_approvalstudent WHERE id=$Id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }
        else{
            header("Location:../approvalAB/approvalab.php");
        }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class="container">
	<form method="post" action="sendemail.php">
		<label for="To">To: </label>
		<input type="email" id="email" name="email" value="<?php echo $row['email']?>" required readonly>

		<label for="Subject">Subject: </label>
		<input type="text" id="title" name="title" required>

		<label for="Message">Message: </label>
		<textarea id="message" name="message" rows="6"></textarea>

		<input type="submit" value="SEND" name="submit">
	</form>
</div>

<?php
    if(isset($_POST['submit'])){
        $url = "https://script.google.com/macros/s/AKfycbx_YABv0LMf7QfXYbbOXevnqNgzO0Nno3TsIkMqkIrneCHerXQsbn4tHtozPQRmEway0Q/exec";
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_POSTFIELDS => http_build_query([
                "recipient" => $_POST['email'],
                "subject"   => $_POST['title'],
                "body"      => $_POST['message']
            ])
        ]);
        $result = curl_exec($ch);
        echo "<script type='text/javascript'>alert('Successfully Save!');window.location.href='../approvalAB/approvalab.php'</script>";
    }
?>


<!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
	function sendEmail(){
		Email.send({
		    Host : "smtp.gmail.com",
		    Username : "solimanjomar.cdlb@gmail.com",
		    Password : "soliman042316",
		    To : document.getElementById("email").value,
		    From : "solimanjomar.cdlb@gmail.com",
		    Subject : "This is the subject",
		    Body : "And this is the body"
		}).then(
		  message => alert("Message Sent Successfully!")
		);
	}
</script> -->

</body>
</html>