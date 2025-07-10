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
			<form method="POST" action="addinstructor.php" autocomplete="off" enctype="multipart/form-data">
				<div class="mb-3">
                  <label class="form-label">Instructor Name: </label>
                  <input type="text" name="ins_name" class="form-control" required>
                </div>
                
                <br/>
                <div class="mb-3">
                  <label class="form-label">Description: </label>
                  <input type="text" name="ins_description" class="form-control">
                </div>

                <br/>
                <div class="mb-3">
                    <label class="form-label">Image: </label>
                    <input type="file" name="imageA" class="form-control">             
                </div>

                <br>
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