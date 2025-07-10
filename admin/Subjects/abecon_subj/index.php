<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../login/index.php");
  } 
?>

<?php include('connection.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
  <title></title>
  <style type="text/css">
    .btnAdd {
      text-align: left;
      width: 83%;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <hr class="bg-dark border-4 border-top">
    <label class="h3"><span class="far fa-clipboard"></span>              List of Subjects</label>
    <hr class="bg-dark border-4 border-top">
    <div class="row">
      <div class="container">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addSubjectModal" class="btn btn-primary btn-sm"><span class="fas fa-solid fa-plus"></span>  New </a>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <table id="subject" class="table table-bordered table-hover">
              <thead>
                <th>Id</th>
                <th>Subject</th> 
                <th>Description</th>
                <th>Unit</th> 
                <th>Pre-requesite</th>
                <th>Course</th>
                <th>Major</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Options</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->





  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#subject').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });
    $(document).on('submit', '#addSubject', function(e) {
      e.preventDefault();
      var subj_code = $('#subj_code').val();
      var subj_description = $('#subj_description').val();
      var subj_unit = $('#subj_unit').val();
      var subj_prereq = $('#subj_prereq').val();
      var subj_course = $('#subj_course').val();
      var subj_major = $('#subj_major').val();
      var subj_year = $('#subj_year').val();
      var subj_semester = $('#subj_semester').val();

      // var city = $('#addCityField').val();
      // var username = $('#addUserField').val();
      // var mobile = $('#addMobileField').val();
      // var email = $('#addEmailField').val();
      if (subj_code != '' && subj_description != '' && subj_unit != '' && subj_prereq != '' && subj_course != '' && subj_major != '' && subj_year != '' && subj_semester != '') {
        $.ajax({
          url: "add_subject.php",
          type: "post",
          data: {
            subj_code : subj_code,
            subj_description : subj_description,
            subj_unit : subj_unit,
            subj_prereq : subj_prereq,
            subj_course : subj_course,
            subj_major : subj_major,
            subj_year : subj_year,
            subj_semester : subj_semester,
            // city: city,
            // username: username,
            // mobile: mobile,
            // email: email
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              alert('Successfully Added!');
              mytable = $('#subject').DataTable();
              mytable.draw();
              $('#addSubjectModal').modal('hide');
              ('.clear').val('');
              
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });

    $(document).on('submit', '#updateSubject', function(e) {
      e.preventDefault();
      //var tr = $(this).closest('tr');
      var subj_code = $('#u_subj_code').val();
      var subj_description = $('#u_subj_description').val();
      var subj_unit = $('#u_subj_unit').val();
      var subj_prereq = $('#u_subj_prereq').val();
      var subj_course = $('#u_subj_course').val();
      var subj_major = $('#u_subj_major').val();
      var subj_year = $('#u_subj_year').val();
      var subj_semester = $('#u_subj_semester').val();
      // var city = $('#cityField').val();
      // var username = $('#nameField').val();
      // var mobile = $('#mobileField').val();
      // var email = $('#emailField').val();
      var trid = $('#trid').val();
      var id = $('#id').val();
      if (subj_code != '' && subj_description != '' && subj_unit != '' && subj_prereq != '' && subj_course != '' && subj_major != '' && subj_year != '' && subj_semester != '') {
        $.ajax({
          url: "update_subject.php",
          type: "post",
          data: {
            subj_code : subj_code,
            subj_description : subj_description,
            subj_unit : subj_unit,
            subj_prereq : subj_prereq,
            subj_course : subj_course,
            subj_major : subj_major,
            subj_year : subj_year,
            subj_semester : subj_semester,
            id: id
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              table = $('#subject').DataTable();
              // table.cell(parseInt(trid) - 1,0).data(id);
              // table.cell(parseInt(trid) - 1,1).data(username);
              // table.cell(parseInt(trid) - 1,2).data(email);
              // table.cell(parseInt(trid) - 1,3).data(mobile);
              // table.cell(parseInt(trid) - 1,4).data(city);
              var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
              var row = table.row("[id='" + trid + "']");
              row.row("[id='" + trid + "']").data([id, subj_code, subj_description, subj_unit, subj_prereq, subj_course, subj_year, subj_semester, button]);
              $('#editModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
    $('#subject').on('click', '.editbtn ', function(event) {
      var table = $('#subject').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#editModal').modal('show');

      $.ajax({
        url: "get_single_data.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#u_subj_code').val(json.subj_code);
          $('#u_subj_description').val(json.subj_description);
          $('#u_subj_unit').val(json.subj_unit);
          $('#u_subj_prereq').val(json.subj_prereq);
          $('#u_subj_course').val(json.subj_course);
          $('#u_subj_major').val(json.subj_major);
          $('#u_subj_year').val(json.subj_year);
          $('#u_subj_semester').val(json.subj_semester);
          $('#id').val(id);
          $('#trid').val(trid);
        }
      })
    });

    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#subject').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete this User ? ")) {
        $.ajax({
          url: "delete_subject.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }



    })
  </script>
  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Subject</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateSubject">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <div class="mb-3">
                <label class="form-label">Subject: </label>
                <input type="text" name="subj_code" id="u_subj_code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description: </label>
                <input type="text" name="subj_description" id="u_subj_description" class="form-control" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Unit: </label>  
                <input type="text" name="subj_unit" id="u_subj_unit" class="form-control" required>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Pre-Requisite: </label>
                <input type="text" name="subj_prereq" id="u_subj_prereq" class="form-control" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Course: </label>
                <input type="text" name="subj_course" id="u_subj_course" class="form-control" readonly required>
              </div>

              <div class="mb-3">
                <label class="form-label">Major: </label>
                <input type="text" name="subj_major" id="u_subj_major" class="form-control" readonly required>
              </div>

              <div class="mb-3">
                <label class="form-label">Year: </label>
                <select name="subj_year" id="u_subj_year" class="form-control">
                  <option value="">--Select--</option>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                  <option value="Third">Third</option>
                  <option value="Fourth">Fourth</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label">Semester: </label>
                <select name="subj_semester" id="u_subj_semester" class="form-control">
                  <option value="">--Select--</option>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select>

              </div>
              <br/>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add user Modal -->
  <div class="modal fade" id="addSubjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addSubject" action="">
            <div class="mb-3">
                  <label class="form-label">Subject: </label>
                  <input type="text" name="subj_code" id="subj_code" class="form-control clear" required >
                </div>

                <div class="mb-3">
                  <label class="form-label">Description: </label>
                  <input type="text" name="subj_description" id="subj_description" class="form-control clear" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Unit: </label>  
                  <input type="text" name="subj_unit" id="subj_unit" class="form-control clear" required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Pre-Requisite: </label>
                  <input type="text" name="subj_prereq" id="subj_prereq" class="form-control clear" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Course: </label>
                  <input type="text" name="subj_course" id="subj_course" class="form-control clear" value="BA" readonly>
                </div>
                <div class="mb-3">
                  <label class="form-label">Major: </label>
                  <input type="text" name="subj_major" id="subj_major" class="form-control clear" value="AB" readonly>
                </div>
                <!-- <div class="mb-3">
                  <label class="form-label">Course: </label>
                  <select name="subj_course" class="form-control" required>
                    <?php while ($row = mysqli_fetch_array($result)):;?>
                    <option><?php echo $row[2]; ?></option>
                    <?php endwhile;?>
                  </select>
                  <input type="text" name="subj_course" class="form-control" required>
                </div> -->

                <div class="mb-3">
                  <label class="form-label">Year: </label>
                  <select name="subj_year" id="subj_year" class="form-control clear" required>
                    <option>--Select--</option>
                    <option value="First"> First</option>
                    <option value="Second"> Second</option>
                    <option value="Third"> Third</option>
                    <option value="Fourth"> Fourth</option>
                  </select>
                  <!-- <input type="text" name="subj_semester" class="form-control" required> -->
                </div>

                <div class="mb-3">
                  <label class="form-label">Semester: </label>
                  <select name="subj_semester" id="subj_semester" class="form-control clear" required>
                    <option>--Select--</option>
                    <option value="First"> First</option>
                    <option value="Second"> Second</option>
                  </select>
                </div>
                <br>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
  //var table = $('#example').DataTable();
</script>