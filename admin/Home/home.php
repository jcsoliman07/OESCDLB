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
	<title>Administrator Panel</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
		justify-items: center;
	}
	body{
		background-color: rgba(0, 0, 0, 0.05);
    animation: fadeInAnimation ease 1.5s;
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
	.container{
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.container .topwrapp{
		margin-left: 10px;
		margin-right: 10px;
		top: 10px;
		padding: 5px;
		bottom: 20px;
		max-width: 100%;
		position: relative;
		background-color: white;
		box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	}

	.container .topwrapp .datetime {
		display: flex;
		padding: 5px;
	}

	.container .topwrapp .datetime .date {
		margin-left: 30px;
	 	flex: 0 0 85%;
	 	font-size: 18px;
	 	color: #044735;
	}

	.container .topwrapp .datetime .time {
	 	flex: 1;
	 	font-size: 18px;
	 	font-weight: bold;
	 	color: #044735;
	}

	.container .wrapp{
		margin-left: 10px;
		margin-right: 10px;
		top: 20px;
		bottom: 20px;
		max-width: 100%;
		position: relative;
		background-color: white;
		box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	}
	.container .wrapp1{
		margin-left: 10px;
		margin-right: 10px;
		top: 30px;
		bottom: 20px;
		max-width: 100%;
		position: relative;
		background-color: white;
		box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	}
	.cardBox{
		/*margin: auto;*/
		position: relative;
		width: 100%;
		max-height: 150px;
		/*padding: 5px;*/
		display: grid;
		grid-template-columns: repeat(3,1fr);
		grid-gap: 5px;
	}
	.cardBox .card{
		margin: 10px;
		position: relative;
		background:  #01150f;
		/*background: #008000;*/
		padding: 10px;
		width: 90%;
		max-height: 100px;
		display: flex;
		justify-content: space-between;
		box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
		border-radius: 0.5rem;	
	}

	.cardBox .card:hover{
		background: #044735;
		color: white;
	}

	.cardBox .card:hover .cardName{
		color: white;
	}
	.cardBox .card:hover .numbers{
		color: white;
	}
	.cardBox .card:hover .cardName a{
		color: white;
	}
	.cardBox .card .cardName a:hover{
		font-weight: bold;
		color: rgba(0, 0, 0, .5);
	}

	.cardBox .card:hover .iconBox{
		color: white;
	}

	.cardBox .card .numbers{
		margin-top: -20px;
		margin-left: 10px;
		position: relative;
		font-size: 2rem;
		font-weight: lighter;
		color: white;
	}
	.cardBox .card .cardName{
		color: white;
		font-size: 1.5rem;
		text-decoration: none;
	}
	.cardBox .card a{
		color: white;
		text-decoration: none;
	}
	.cardBox .card .iconBox{
		font-size: 4em;
		color: white;
	}
	/*style="text-decoration: none; color:white;"*/
</style>
<body onload="initClock()">
	<div class="container">
		<div class="topwrapp">
			<!--digital clock start-->
		    <div class="datetime">
		      <div class="date">
		        <span id="dayname">Day</span>,
		        <span id="month">Month</span>
		        <span id="daynum">00</span>,
		        <span id="year">Year</span>
		      </div>
		      <div class="time">
		        <span id="hour">00</span>:
		        <span id="minutes">00</span>:
		        <span id="seconds">00</span>
		        <span id="period">AM</span>
		      </div>
		    </div>
		    <!--digital clock end-->
		</div>
		<div class="wrapp">
			<div class="cardBox">
				<div class="card">
					<div>
						<div class="numbers">
							<?php
							require 'db_conn.php';

							$query = "SELECT id FROM tbl_newstudent ORDER BY id";
							$query_run = mysqli_query($conn, $query);

							$row = mysqli_num_rows($query_run);

							echo '<h1>'.$row.'</h1>'
							?>
						</div>
						<div class="cardName"><a href="../newenrollees/framemain.php" target="frame_body">New College Enrollees  <span class="fas fa-caret-right"></span></a></div>
					</div>
					<div class="iconBox">
						<i class="fas fa-users" ></i>
					</div>
				</div>

				<div class="card">
					<div>
						<div class="numbers">
							<?php
							require 'db_conn.php';

							$query = "SELECT id FROM tbl_oldstudent ORDER BY id";
							$query_run = mysqli_query($conn, $query);

							$row = mysqli_num_rows($query_run);

							echo '<h1>'.$row.'</h1>'
							?>
						</div>
						<div class="cardName"><a href="../oldstudent/framemain.php" target="frame_body">Old College Student  <span class="fas fa-caret-right"></span></a></div>
					</div>
					<div class="iconBox">
						<i class="fas fa-users" ></i>
					</div>
				</div>
				
				<div class="card">
					<div>
						<div class="numbers">
							<?php
							require 'db_conn.php';

							$query = "SELECT id FROM tbl_student ORDER BY id";
							$query_run = mysqli_query($conn, $query);

							$row = mysqli_num_rows($query_run);

							echo '<h1>'.$row.'</h1>'
							?>
						</div>
						<div class="cardName">Total Enrolled College Students</div>
					</div>
					<div class="iconBox">
						<i class="fas fa-users" ></i>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapp1">
		<br>
			<div class="container-fluid">
					<h3 style="margin-left: 20px;"><span class="far fa-clipboard"></span> REPORTS</h3>
							<hr class="bg-dark border-4 border-top">

							<div class="row1">
								<table id="myTable" class="table table-bordered table-striped">
									<thead>
										<th>Subject</th>
										<th>Description</th>
									</thead>
									<?php 
									$conn = mysqli_connect("localhost", "root", "", "oescdlb") or die (mysqli_error());

									$sql = "SELECT DISTINCT subj_code, subj_description, subj_unit FROM `tbl_subjects`";		

									$result = mysqli_query($conn, $sql);

										while ($row = mysqli_fetch_assoc($result)){
											echo
											"<tr>
												<td><a href='grade.php?subj_code=".$row['subj_code']."' style='color: green; text-decoration: none;'>".$row['subj_code']."</td>
												<td>".$row['subj_description']."</td>
											</tr>";
										}
									?>
								</table>
							</div>
			</div>
			<br>
			<br>
		</div>
	</div>
	<br>
	<br>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->

<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>


<script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
</body>
</html>