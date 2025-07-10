<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
 </head>
 <body>
<div class="container-fluid">
    <div class="col-sm-1">
        <a href="add_modal.php" target="myFrame" class="btn btn-success"><span class="glyphicon glyphicon-download-alt"></span> Retrieve</a>
    </div>
    <div class="col-sm-1">
      <a href="archive_modal.php" target="myFrame" class="btn btn-warning"><span class="glyphicon glyphicon-save"></span> Archive</a>
    </div>

   <br />
   <br />
   <br />
   <div class="panel panel-default">
    <div class="panel-body">
     <div class="table-responsive">
      <table id="myTable" class="table table-bordered table-striped" style="font-size:12px">
       <thead>
        <tr>
         <th></th>
         <th>Student ID</th>
         <th>Last Name</th>
         <th>First Name</th>
         <th>Middle Name</th>
         <th>Subject</th>
         <th>Course</th>
         <th>Year</th>
         <th>Semester</th>
         <th>Prelims</th>
         <th>Midterm</th>
         <th>Prefinal</th>
         <th>Final</th>
        </tr>
       </thead>
       <tbody></tbody>
      </table>
     </div>
    </div>
   </div>
</div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 var dataTable = $('#myTable').DataTable({
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
   url:"fetch.php",
   type:"POST"
  }
 });

 $('#myTable').on('draw.dt', function(){
  $('#myTable').Tabledit({
   url:'action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'id'],
    editable:[[9, 'prelim'], [10, 'midterm'], [11, 'prefi'], [12, 'finals']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.id).remove();
     $('#myTable').DataTable().ajax.reload();
    }
   }
  });
 });
  
}); 
</script>

<!-- <script>
  function checker() {
    var result = confirm('Are you sure you want to Archive?');
    if (result == false){
      event.preventDefault();
    }
  }
</script> -->