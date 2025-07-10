<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $rows['ins_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Faculty</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="update.php" autocomplete="off" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="id" value="<?php echo $rows['ins_id']; ?>">
				<div class="form-group">
					<div class="mb-3">
                  <label class="form-label">Instructor Name: </label>
                  <input type="text" name="ins_name" class="form-control" value="<?php echo $rows['ins_name']; ?>" required>
                </div>
                
                <br/>
                <div class="mb-3">
                  <label class="form-label">Description: </label>
                  <input type="text" name="ins_description" class="form-control" value="<?php echo $rows['ins_description']; ?>">
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

<!-- Change -->
<div class="modal fade" id="change_<?php echo $rows['ins_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Change Faculty Image</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="updates_image.php" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="id" value="<?php echo $rows['ins_id']; ?>">
               
                    <label class="form-label">Image: </label>
                    <div class="mb-3">
                        <img src="<?php echo $rows['ins_image']; ?>" width="300px" height="300px">
                        <br/>
                        <br/>
                        <input type="file" name="imageA" class="form-control"> 
                        <input type="hidden" name="imageA_old" class="form-control" value="<?php echo $rows['ins_image']; ?>">            
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
<div class="modal fade" id="delete_<?php echo $rows['ins_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Faculty</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $rows['ins_name'] ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="deletedepart.php?id=<?php echo $rows['ins_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>