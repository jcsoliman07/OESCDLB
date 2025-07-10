<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>C</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
	<script src="jquery/filter.js"></script>
	<style>
		body{
			background-color: rgba(0, 0, 0, 0.1);
		}
		.wrapp{
	      margin-left: 10px;
	      margin-right: 10px;
	      padding: 10px;
	      top: 10px;
	      bottom: 10px;
	      max-width: 100%;
	      max-height: 100%;
	      position: relative;
	      background-color: white;
	      box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	    }
	    .wrapp .row1{
	      margin-left: 15px;
	      margin-right: 15px;
	      padding-bottom: 20px;
	      position: relative;
	      max-width: 100%;
	    }

	    .wrapp1{
	      margin-top: 10px;
	      margin-left: 10px;
	      margin-right: 10px;
	      padding: 10px;
	      top: 10px;
	      bottom: 10px;
	      max-width: 100%;
	      max-height: 100%;
	      position: relative;
	      background-color: white;
	      box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
	    }
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="wrapp">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<h3><span class="far fa-clipboard"></span> SET CURRENT ACADEMIC YEAR</h3>
			<hr class="bg-dark border-4 border-top">
			<div class="row1">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
			</div>
			<div class="height10">
			</div>
			<div class="row1">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Academic Year</th>
						<th>Action</th>
					</thead>
					<tbody style="font-size:13px">
						<?php
							$i=0;
							include_once('connection.php');
							
							$sql = "SELECT * FROM tbl_academicyear ORDER BY `status` DESC";
 
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$i++;
							?>
							<tr>
								<td class='hidden'><input type='hidden' value="<?php echo $row['id']?>"></td>
								<td><a href="#edit_<?php echo $row['id'] ?>" style='color: green; text-decoration: none;' data-toggle='modal'><?php echo $row['year']?></td>
								<td>
									 <?php 
                                		if ($row['status']==1){
		                                    echo '<a href="status.php?id='.$row['id'].'&status=0" class="btn btn-success"><span class="fas far fa-edit"></span>   Set</a>';
		                                }else{
		                                    echo '<a href="status.php?id='.$row['id'].'&status=1" class="btn btn-danger"><span class="fas far fa-edit"></span>   Unset</a>';
		                                }
		                            ?>
								</td>
								<td class='hidden'><input type='hidden' value="<?php echo $row['status']?>"></td>	
							</tr>
							<?php
								include('edit_delete_modal.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="ddtf.js"></script>
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

<script>
	window.onload = () =>{
		console.log(document.querySelector('#myTable1 > tbody > tr:nth-child(1) > td:nth-child(2)').innerHTML);
	}
</script>

</body>
</html>