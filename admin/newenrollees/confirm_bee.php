<div class="modal fade" id="update_modal<?php echo $rows['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="confirmupdatebee.php">
				<div class="modal-header">
					<h3 class="modal-title">Confirm Student</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="hidden">Firstname</label>
							<input type="hidden" name="id" value="<?php echo $rows['id']?>"/>
							<input type="hidden" name="myFname" value="<?php echo $rows['fname']?>" class="form-control"/>

							<label class="hidden">Lastname</label>
							<input type="hidden" name="myLname" value="<?php echo $rows['lname']?>" class="form-control"/>

							<label class="hidden">Middlename</label>
							<input type="hidden" name="myMname" value="<?php echo $rows['mname']?>" class="form-control"/>

							<label class="hidden">Suffix</label>
							<input type="hidden" name="mySuffix" value="<?php echo $rows['suffix']?>" class="form-control"/>

							<label class="hidden">Address</label>
							<input type="hidden" name="myAddress" value="<?php echo $rows['address']?>" class="form-control"/>

							<label class="hidden">Birthdate</label>
							<input type="hidden" name="myBdate" value="<?php echo $rows['bdate']?>" class="form-control"/>

							<label class="hidden">Birthplace</label>
							<input type="hidden" name="myBplace" value="<?php echo $rows['bplace']?>" class="form-control"/>

							<label class="hidden">Religion</label>
							<input type="hidden" name="myReligion" value="<?php echo $rows['religion']?>" class="form-control"/>

							<label class="hidden">Nationality</label>
							<input type="hidden" name="myNationality" value="<?php echo $rows['nationality']?>" class="form-control"/>

							<label class="hidden">Gender</label>
							<input type="hidden" name="myGender" value="<?php echo $rows['gender']?>" class="form-control"/>

							<label class="hidden">Civil Status</label>
							<input type="hidden" name="myCstat" value="<?php echo $rows['cstat']?>" class="form-control"/>

							<label class="hidden">Email</label>
							<input type="hidden" name="myEmail" value="<?php echo $rows['email']?>" class="form-control"/>

							<label class="hidden">Mobile Number</label>
							<input type="hidden" name="myMnum" value="<?php echo $rows['mnum']?>" class="form-control"/>

							<label class="hidden">Guardian Name</label>
							<input type="hidden" name="myGname" value="<?php echo $rows['guardianname']?>" class="form-control"/>

							<label class="hidden">Guardian Number</label>
							<input type="hidden" name="myGnum" value="<?php echo $rows['guardiannumber']?>" class="form-control"/>

							<label class="hidden">Guardian Occupation</label>
							<input type="hidden" name="myGoccup" value="<?php echo $rows['goccupation']?>" class="form-control"/>

							<label class="hidden">Guardian Address</label>
							<input type="hidden" name="myGaddress" value="<?php echo $rows['gaddress']?>" class="form-control"/>

							<label class="hidden">Requirements</label>
							<input type="hidden" name="myRequirement" value="<?php echo $rows['requirement']?>" class="form-control"/>

							<p class="h4">Are you sure you want to confirm?</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="Add" class="btn btn-primary"><span class="fas fa-edit"></span> Update </button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel </button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>