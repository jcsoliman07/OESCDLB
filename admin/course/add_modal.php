<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="addcrse.php" autocomplete="off">
				<div class="mb-3">
                	<label class="form-label">Course: </label>
                	<input type="text" name="crse_description" class="form-control" required>
              	</div>

              	<div class="mb-3">
                	<label class="form-label">Major: </label>
                	<input type="text" name="crse_major" class="form-control">
              	</div>

              	<div class="mb-3">
                	<label class="form-label">Department: </label>
                	<select name="crse_department" class="form-control">
                  		<option value="">None</option>
                	<?php
                  		include "db_conn.php";
                  		$department = mysqli_query($conn, "SELECT department FROM tbl_department");

                  		while($result = mysqli_fetch_array($department)){
                	?>
                  		<option <?php $result['department']?>><?php echo $result['department']?></option>
                  	<?php
                	}
                	?>
                </select>
                <br>
              </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
 
        </div>
    </div>
</div>