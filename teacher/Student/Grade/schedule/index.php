<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../../mainlogin.php");
  } 
?>
<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Poppins, sans-serif;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
        .topwrapp{
            margin-left: 10px;
            margin-right: 10px;
            top: 10px;
            padding: 5px;
            bottom: 20px;
            max-width: 100%;
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }
        .wrapp{
            margin-left: 10px;
            margin-right: 10px;
            top: 20px;
            bottom: 20px;
            max-width: 100%;
            /*max-height: 500px;*/
            position: relative;
            background-color: white;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
        }

         .cardBox{
        /*margin: auto;*/
        position: relative;
        width: 100%;
        /*padding: 5px;*/
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 5px;
        }
        .cardBox .card{
            margin: 20px;
            position: relative;
            background:  #01150f;
            /*background: #008000;*/
            padding: 20px;
            width: 80%;
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
            border-radius: 0.5rem;  
        }

        .cardBox .card:hover{
            background: #044735;
            color: white;
        }

        .cardBox .card:hover .cardName{
            color: white;
        }
        .cardBox .card:hover .numbers{
            color: white;
        }
        .cardBox .card:hover .cardName a{
            color: white;
        }
        .cardBox .card .cardName a:hover{
            font-weight: bold;
            color: rgba(0, 0, 0, .5);
        }

        .cardBox .card:hover .iconBox{
            color: white;
        }

        .cardBox .card .numbers{
            margin-left: 10px;
            position: relative;
            font-size: 2em;
            font-weight: lighter;
            color: white;
        }
        .cardBox .card .cardName{
            color: white;
            font-size: .8rem;
        }
        .cardBox .card .cardName a{
            color: white;
            font-size: 15px;
            /*margin-left: 10px;*/
            text-decoration: none;
        }
        .cardBox .card .iconBox{
            font-size: 4em;
            color: white;
        }
    </style>
</head>

<body class="bg-light">
    <div class="topwrapp">
          <div class="cardBox">
                <div class="card">
                     <div>
                        <div class="numbers">
                            <?php
                            require 'db-connect.php'; 
                            $login_id = $_SESSION['login_id'];

                            $query = "SELECT id FROM tbl_instructor_subjects WHERE instructor_id='$login_id'";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h1>'.$row.'</h1>'
                            ?>
                        </div>
                        <div class="cardName"><a><span target="frame_body">Subjects  </span></a></div>
                    </div>
                </div>

                <div class="card">
                     <div>
                        <div class="numbers">
                        <?php
                            require 'db-connect.php'; 
                            $login_id = $_SESSION['login_id'];

                            $query = mysqli_query($conn, "SELECT * FROM tbl_instructor_subjects WHERE instructor_id='$login_id'");
                            while($row = mysqli_fetch_array($query)){
                                $subj_code = $row['subj_code'];

                                $query1 = mysqli_query($conn, "SELECT COUNT(*) AS `total` FROM `tbl_student_subjects` WHERE `subj_code`='$subj_code'");
                                while($row1 = mysqli_fetch_array($query1)){
                                    $count = $row1['total'];

                                    if ($count == '') {
                        ?>
                                <h1>0</h1>
                        <?php
                                    }else{
                        ?>
                                <h1><?php echo $count;?></h1>
                        <?php
                                    }
                                }
                            }

                            // $query = "SELECT subj_code FROM tbl_instructor_subjects WHERE instructor_id='$login_id'";
                            // $query_run = mysqli_query($conn, $query);
                            // $row = mysqli_fetch_assoc($query_run);

                            // $subj_code=$row['subj_code'];

                            // $query1 = "SELECT id FROM tbl_student_subjects WHERE subj_code='$subj_code'";
                            // $query_run1 = mysqli_query($conn, $query1);

                            // $row1 = mysqli_num_rows($query_run1);
                            // echo '<h1>'.$row1.'</h1>'
                            
                        ?>
                        </div>
                        <div class="cardName"><a><span target="frame_body">Students  </span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapp">
        <div class="container py-5" id="page-container">
            <div class="row">
                <div class="col-md-12">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->
        <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title">Schedule Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container-fluid">
                            <dl>
                                <dt class="text-muted">Title</dt>
                                <dd id="title" class="fw-bold fs-4"></dd>
                                <dt class="text-muted">Description</dt>
                                <dd id="description" class=""></dd>
                                <dt class="text-muted">Start</dt>
                                <dd id="start" class=""></dd>
                                <dt class="text-muted">End</dt>
                                <dd id="end" class=""></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0">
                       <!--  <div class="text-end">
                            <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                            <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <!-- Event Details Modal -->

<?php 
$schedules = $conn->query("SELECT * FROM `tbl_schedule`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>