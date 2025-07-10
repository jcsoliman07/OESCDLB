<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>College Online Grading System</title>

<!-- Style -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/c4aa1da3d9.js"></script>

<!-- Photos -->
<link rel="shortcut icon" type="image/png" href="image/logo.png">

<style>
   body {
   background: #eeeeee;
   font-family: 'Varela Round', sans-serif;
}


.nav{
   background-color: #1a4720;
   width: 100%;
   height: 5%;
}

.home{
   color: white;
   padding-top: 1%;
   padding-right: 2%;
   padding-left: 2%;
   padding-bottom: 1%;
}
.home:hover{
   color: lightgreen;
   text-decoration: none;
}

.student{
   color: white;
   padding-top: 1%;
   padding-right: 1%;
   padding-left: 2%;
   padding-bottom: 1%;
}
.student:hover{
   color: lightgreen;
   text-decoration: none;
}
.un{
   color: white;
   padding-left: 60%;
   font-size: 120%;
   padding-top: 1%;
   padding-right: 2%;
   font-family: poppins;
}
.logout{
   color:white;
   margin-left: 90%;
   margin-top: -3.6%;
   padding-top: 1%;
   padding-right: 2%;
   padding-bottom: 1%;
   padding-left: 2%;
}
.logout:hover{
   color: lightgreen;
   text-decoration: none;
}
.note{
   background-color: #eeeeeee;
   margin: 0;
   padding: 0;
}
.wel{
   margin-left: 5%;
   padding-top: 2%;
   font-family: poppins;
   color: green;
}
.cardBox{
      margin-top: 5%;
      position: relative;
      width: 50%;
      left: 10%;
      display: grid;
      grid-template-columns: repeat(2,1fr);
      grid-gap: 1px;
   }
   .cardBox .card{
      position: relative;
      background: #CFECC1;
      padding: 20px;
      width: 260px;
      display: flex;
      justify-content: space-between;
      cursor: pointer;
   }
   .cardBox .card .numbers{
      position: relative;
      font-size: 2em;
      font-weight: 500;
      color: black;
   }
   .cardBox .card .cardName{
      color: green;
   }
   .cardBox .card .iconBox{
      font-size: 2.5em;
      color: green;
   }
.no{
   background-color: #F5B7AD;
   width: 50%;
   margin-left: 26%;
   margin-top: 10%;
   border-radius: 1rem;
   border-color: #CE250A;
   border-width: thick;
   box-shadow: 5px 5px 5px 2px rgba(0,0,0,1.05);
}
.notice{
   padding-top: 2%;
   padding-right: 2%;
   padding-left: 2%;
   padding-bottom: 2%;

}
.profile{
   background-color: whitesmoke;
   width: 30%;
   height: 350px;
   margin-left: 65%;
   margin-top: -32%;
   position: fixed;
   border-radius: 1rem;
   border-color: #CE250A;
   border-width: thick;
   box-shadow: 5px 5px 5px 2px rgba(0,0,0,0.25);
}
/*.cardBox{
      position: relative;
      margin-top: 10%;
      left: 5%;
      width: 95%;
      display: grid;
      grid-template-columns: repeat(4,1fr);
      grid-gap: 7%;
   }
   .cardBox .card{
      position: relative;
      background: #006400;
      padding: 20px;
      width: 240px;
      display: flex;
      justify-content: space-between;
      /*cursor: none;*/
      border-radius: 1rem;
   }
   .cardBox .card .numbers{
      position: relative;
      font-size: 2em;
      font-weight: 500;
      color: white;
   }
   .cardBox .card .cardName{
      color: yellow;
   }
   .cardBox .card .iconBox{
      font-size: 2.5em;
      color: yellow;
   }*/
   .datetime{
      color: #515350;
      background: whitesmoke;
      font-family: "Segoe UI", sans-serif;
      margin-left: 70%;
      margin-top: 8%;
      width: 250px;
      padding: 15px 20px;
      border: 3px solid #3BAB05;
      border-radius: 5px;
      -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 255, 255, 0.1));
      transition: 0.5s;
      transition-property: background, box-shadow;
   }
   .datetime:hover{
      background: #3BAB05;
      box-shadow: 0 0 30px #3BAB05;
      color: white;
   }
   .date{
      font-size: 16px;
      font-weight: 600;
      text-align: center;
      letter-spacing: 3px;
   }
   .time{
      font-size: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
   }
   .time span:not(:last-child){
      position: relative;
      margin: 0 6px;
      font-weight: 600;
      text-align: center;
      letter-spacing: 3px;
   }
   .time span:last-child{
      background: #3BAB05;
      font-size: 3px;
      font-weight: 600;
      text-decoration: uppercase;
      margin-top: 10px;
      padding: 0 5px;
      border-radius: 3px;
   }

</style>

</head>

<body onload="initClock()">
<div class="form">
<?php
   include "db.php";
   $login_id = $_SESSION['login_id'];
   $sql = mysqli_query($con,"SELECT * FROM tbl_instructor WHERE ins_id = '$login_id'");

   while ($rows = mysqli_fetch_array($sql)) {
      echo "<input type='hidden' value='".$rows['ins_id']."'>";
      $ins_id=$rows['ins_id'];

?>
<div class="nav">  
      <!-- <a href="index.php" class="home"><i class="fa fa-home"></i><span> Home</span></a> -->
      <a href="Grade/subject.php?id=<?=$ins_id?>" class="student"><i class="fa fa-clipboard"></i><span> Class List</span></a>
      <p class="un"><?php echo $_SESSION['login_name']; ?></p>
      <a onclick="checker()" href="logout.php" class="logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
</div>
<div class="note">
   <h1 class="wel">Welcome to your Dashboard</h1>
   <hr>
<!--    <div class="cardBox">
      <div class="card">
         <div>
            <div class="numbers">
               <?php
               require 'db_conn.php';

               $query = "SELECT student_id FROM tbl_student_subjects ORDER BY student_id";
               $query_run = mysqli_query($conn, $query);

               $row = mysqli_num_rows($query_run);

               echo '<h1>'.$row.'</h1>'
               ?>
            </div>
            <div class="cardName">Instructors</div>
         </div>
         <div class="iconBox">
            <i class="fas fa-book-reader" ></i>
         </div>
      </div>
      
      <div class="card">
         <div>
            <div class="numbers">
               <?php
               require 'db_conn.php';

               $query = "SELECT id FROM tbl_student ORDER BY id";
               $query_run = mysqli_query($conn, $query);

               $row = mysqli_num_rows($query_run);

               echo '<h1>'.$row.'</h1>'
               ?>
            </div>
            <div class="cardName">Students</div>
         </div>
         <div class="iconBox">
            <i class="fas fa-users" ></i>
         </div>
      </div>

      <div class="card">
         <div>
            <div class="numbers">
               <?php
               require 'db_conn.php';

               $query = "SELECT crse_id FROM tbl_course ORDER BY crse_id";
               $query_run = mysqli_query($conn, $query);

               $row = mysqli_num_rows($query_run);

               echo '<h1>'.$row.'</h1>'
               ?>
            </div>
            <div class="cardName">Course</div>
         </div>
         <div class="iconBox">
            <i class="fas fa-graduation-cap"></i>
         </div>
      </div>
   </div> -->
   <div class="datetime">
      <div class="date">
         <span id="dayname">Day</span>
         <span>, </span>
         <span id="month">Month </span>
         <span id="daynum">00</span>
         <span id="year">Year</span>
      </div>
      <div class="date">
         <span id="hour">00</span>
         <span>:</span>
         <span id="minutes">00</span>
         <span>:</span>
         <span id="seconds">00</span>
         <span id="period">AM</span>
      </div>
   </div>
   

   <div class="no">
   <p class="notice">Note: "You need to submit the students grades before the due date. Your account will be deactivated once you missed the submission time.<br><br>

   Cooperate to the Registrar/admin and send an email to cdlb1994@yahoo.com</p>
   </div>
   </div>

<?php
   }
?>
</div>
<script>
      function updateClock(){
         var now = new Date();
         var dname = now.getDay(),
         mo = now.getMonth(),
         dnum = now.getDate(),
         yr = now.getFullYear(),
         hou = now.getHours(),
         min = now.getMinutes(),
         sec = now.getSeconds(),
         pe = "AM";

         if(hou == 0){
            hou = 12;
         }
         if(hou > 12){
            hou = hou - 12;
            pe = "PM";
         }
         

         var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
         var week  = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
         var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
         var values = [week[dname], months[mo], dnum, yr, hou, min, sec, pe];
         for(var i = 0; i < ids.length; i++)
            document.getElementById(ids[i]).firstChild.nodeValue = values[i];
      }

      function initClock(){
         updateClock();
         window.setInterval("updateClock()", 1);
      }
   </script>
<script>
  function checker() {
    var result = confirm('Are you sure you want to logout?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>
</body>
</html>