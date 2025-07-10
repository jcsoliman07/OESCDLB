<div class="modal fade" id="update_modal<?php echo $rows['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			 <!-- action="insertstudentCS.php" -->
			 <!-- action="subject.php" -->
			<form method="POST">
				<div class="modal-header">
					<h3 class="modal-title">Confirm Student</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<input type="hidden" name="id" class="form-control" value="<?php echo $rows['id'];?>">
							<input type="hidden" name="semester" class="form-control" value="<?php echo $rows['semester'];?>">
							<input type="hidden" name="student_id" value="<?php echo $rows['student_id'];?>" class="form-control">

							<label class="hidden">year</label>
							<input type="hidden" name="year" value="<?php echo $rows['year'];?>"/>

							<input type="text" name="student_status" value="<?php echo $rows['student_status'];?>"/>
							<input type="hidden" name="course" value="<?php echo $rows['course'];?>"/>
							<input type="hidden" name="major" value="<?php echo $rows['major'];?>"/>
							
							<input type="hidden" name="fname" value="<?php echo $rows['fname'];?>" class="form-control"/>
							<input type="hidden" name="lname" value="<?php echo $rows['lname'];?>" class="form-control"/>
							<input type="hidden" name="mname" value="<?php echo $rows['mname'];?>" class="form-control"/>
							<input type="hidden" name="suffix" value="<?php echo $rows['suffix'];?>" class="form-control"/>

							<input type="hidden" name="address" value="<?php echo $rows['address'];?>" class="form-control"/>
							<input type="hidden" name="bdate" value="<?php echo $rows['bdate'];?>" class="form-control"/>
							<input type="hidden" name="bplace" value="<?php echo $rows['bplace'];?>" class="form-control"/>
							<input type="hidden" name="religion" value="<?php echo $rows['religion'];?>" class="form-control"/>
							<input type="hidden" name="nationality" value="<?php echo $rows['nationality'];?>" class="form-control"/>
							<input type="hidden" name="gender" value="<?php echo $rows['gender'];?>" class="form-control"/>
							<input type="hidden" name="cstat" value="<?php echo $rows['cstat'];?>" class="form-control"/>
							<input type="hidden" name="email" value="<?php echo $rows['email'];?>" class="form-control"/>
							<input type="hidden" name="mnum" value="<?php echo $rows['mnum'];?>" class="form-control"/>

							<input type="hidden" name="fathername" value="<?php echo $rows['fathername'];?>" class="form-control"/>
							<input type="hidden" name="fathermnum" value="<?php echo $rows['fathermnum'];?>" class="form-control"/>
							<input type="hidden" name="foccupation" value="<?php echo $rows['foccupation'];?>" class="form-control"/>
							<input type="hidden" name="faddress" value="<?php echo $rows['faddress'];?>" class="form-control"/>

							<input type="hidden" name="mothername" value="<?php echo $rows['mothername'];?>" class="form-control"/>
							<input type="hidden" name="mothermnum" value="<?php echo $rows['mothermnum'];?>" class="form-control"/>
							<input type="hidden" name="moccupation" value="<?php echo $rows['moccupation'];?>" class="form-control"/>
							<input type="hidden" name="maddress" value="<?php echo $rows['maddress'];?>" class="form-control"/>

							<input type="hidden" name="guardianname" value="<?php echo $rows['guardianname'];?>" class="form-control"/>
							<input type="hidden" name="guardiannumber" value="<?php echo $rows['guardiannumber'];?>" class="form-control"/>
							<input type="hidden" name="goccupation" value="<?php echo $rows['goccupation'];?>" class="form-control"/>
							<input type="hidden" name="gaddress" value="<?php echo $rows['gaddress'];?>" class="form-control"/>

							<input type="hidden" name="requirement1" value="<?php echo $rows['requirement1'];?>" class="form-control"/>
							<input type="hidden" name="requirement2" value="<?php echo $rows['requirement2'];?>" class="form-control"/>
							<input type="hidden" name="requirement3" value="<?php echo $rows['requirement3'];?>" class="form-control"/>
							<input type="hidden" name="requirement4" value="<?php echo $rows['requirement4'];?>" class="form-control"/>
							<input type="hidden" name="requirement5" value="<?php echo $rows['requirement5'];?>" class="form-control"/>
							<input type="hidden" name="requirement6" value="<?php echo $rows['requirement6'];?>" class="form-control"/>

							<p class="h4">Are you sure you want to confirm?</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-sm" name="button" id="button" data-toggle="tooltip" data-placement="top" title="Confirm Student" type="button"><span class="fas far fa-check"></span> </button>
					<!-- <a href="subject.php?id=<?=$rows['id']?>" type="submit" name="button" id="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Confirm"><span class="fas far fa-check"></span></a> -->

					<a href="approvalcs.php" type="button" name="button" id="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Cancel"><span class="glyphicon glyphicon-remove"></span></a>
					<!-- <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button> -->

				</div>
				</div>
			</form>
		</div>
	</div>
</div>