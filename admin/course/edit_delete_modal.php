<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $rows['crse_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Course</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="updatecrse.php" autocomplete="off">
				<input type="hidden" class="form-control" name="id" value="<?php echo $rows['crse_id']; ?>">
				<div class="form-group">
					<div class="mb-3">
						<label class="form-label">Course: </label>
						<input type="text" name="crse_description" class="form-control" value="<?=$rows['crse_description']?>" required>
					</div>

					 <div class="mb-3">
                		<label class="form-label">Major: </label>
                		<input type="text" name="crse_major" class="form-control" value="<?=$rows['crse_major']?>">
              		</div>

					<div class="mb-3">
						<label class="form-label">Department: </label>
						<select name="crse_department" class="form-control">
							<option value="">--Select--</option>
							<option value="Business Administration" <?php if($rows["crse_department"]=='Business Administration'){echo "selected";}?>>Business Administration</option>
							<option value="Computer Science" <?php if($rows["crse_department"]=='Computer Science'){echo "selected";}?>>Computer Science</option>
							<option value="Economics" <?php if($rows["crse_department"]=='Economics'){echo "selected";}?>>Economics</option>
							<option value="Education" <?php if($rows["crse_department"]=='Education'){echo "selected";}?>>Education</option>
							<option value="Masteral" <?php if($rows["crse_department"]=='Masteral'){echo "selected";}?>>Masteral</option>
						</select>		
					</div>

					<br>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $rows['crse_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Course</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $rows['crse_description'].', '.$rows['crse_major']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="deletecrse.php?id=<?php echo $rows['crse_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>