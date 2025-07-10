<div class="modal fade" id="form_modal<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update.php" autocomplete="off">
				<div class="modal-header">
					<h3 class="modal-title">Edit Grade</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $fetch['id']?>"/>
							<input type="hidden" name="student_id" value="<?php echo $row['student_id']?>">
							<label>Subject</label>
							<input type="text" name="subj_code" class="form-control" value="<?=$fetch['subj_code']?>" readonly>
						</div>

						<div class="form-group">
							<label>Prelim</label>
							<input type="text" min="0" max="100" class="form-control" name="prelim" value="<?=$fetch['prelim']?>" />
						</div>
						<div class="form-group">
							<label>Midterm</label>
							<input type="text" min="0" max="100" class="form-control" name="midterm" value="<?=$fetch['midterm']?>"/>
						</div>
						
						<div class="form-group">
							<label>Prefi</label>
							<input type="text" min="0" max="100" class="form-control" name="prefi" value="<?=$fetch['prefi']?>"/>
						</div>

						<div class="form-group">
							<label>Final</label>
							<input type="text" min="0" max="100" class="form-control" name="Final" value="<?=$fetch['final']?>"/>
						</div>
					</div>

				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Update" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Update </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel </button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- <div class="modal fade" id="form_modal<?php echo $rows['subj_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action=>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="text" name="id" value="<?php echo $fetch['subj_id']?>"/>
							<label>Subject</label>
							<input type="text" name="subj_code" class="form-control" value="<?=$fetch['subj_code']?>" readonly>
						</div>

						<div class="form-group">
							<label>Prelim</label>
							<input type="number" min="0" max="100" class="form-control" name="prelim" required="required"/>
						</div>
						<div class="form-group">
							<label>Midterm</label>
							<input type="number" min="0" max="100" class="form-control" name="midterm" required="required"/>
						</div>
						<div class="form-group">
							<label>Prefi</label>
							<input type="number" min="0" max="100" class="form-control" name="prefi" required="required"/>
						</div>

						<div class="form-group">
							<label>Final</label>
							<input type="number" min="0" max="100" class="form-control" name="Final" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> save</button>
				</div>
			</form>
		</div>
	</div>
</div>	 -->