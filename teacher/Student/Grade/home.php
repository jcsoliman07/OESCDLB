<?php
  session_start();

  if (isset($_SESSION['username'])) {
    echo "<input type='hidden' value='".$_SESSION['username']."'";
  }
  else{
    header("Location:../../../mainlogin.php");
  } 
?>

<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  <script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });
   
  </script>
 </head>
 <style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        justify-items: center;
    }
    body{
        background-color: rgba(0, 0, 0, 0.05);
        animation: fadeInAnimation ease 1.5s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }
  
    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
         }
    }
    .container{
        width: 100%;
        margin: 0;
        padding: 0;
    }
    .container .topwrapp{
        margin-top: 1em;
        margin-left: 10px;
        margin-right: 10px;
        padding: 5px;
        bottom: 5px;
        max-width: 100%;
        position: relative;
        background-color: white;
        box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
    }

    .container .wrapp{
        margin-left: 10px;
        margin-right: 10px;
        top: 10px;
        bottom: 20px;
        max-width: 100%;
        max-height: 100%;
        position: relative;
        background-color: white;
        box-shadow: 0px 10px 20px rgba(0,0,0,0.20);
    }

    .container .wrapp1{
        margin-left: 10px;
        margin-right: 10px;
        top: 30px;
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

    .container .wrapp .bottomwrapp{
        padding: 20px;
        max-height: 100%;
        margin-bottom: 2em;
    }

</style>
 <body>
    <div class="container">
        <div class="topwrapp">
            <div class="cardBox">
                <div class="card">
                     <div>
                        <div class="numbers">
                            <?php
                            require 'db_conn.php'; 
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
                            require 'db_conn.php'; 
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

        <div class="wrapp">
            <div class="bottomwrapp">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
 </body>
</html>