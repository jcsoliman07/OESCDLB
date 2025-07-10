<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $result2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Grade</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php" autocomplete="off">
				<input type="hidden" class="form-control" name="id" value="<?php echo $result2['id']; ?>">
				<input type="hidden" class="form-control" name="st_id" value="<?php echo $result2['student_id']; ?>">
				<input type="hidden" class="form-control" name="subj_code" value="<?php echo $result2['subj_code']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prelim:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prelim" value="<?php echo $result2['prelim']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Midterm:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="midterm" value="<?php echo $result2['midterm']; ?>">
						<p class="error final_error"></p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Prefinal:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prefi" value="<?php echo $result2['prefi']; ?>">

						<p class="error final_error"></p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Finals:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="final" value="<?php echo $result2['final']; ?>"/>
						
						<p class="error final_error"></p>

					</div>
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
 