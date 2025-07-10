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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

  <nav>
    <ul>
      <li>
        <a href="#" class="logo">
          <img src="image/logo.png" alt="">
          <span class="nav-item">Colegio de Los Baños</span>
        </a>
      </li>
      <br>
      <li>
        <div class="user">
          <?php
            include "db_conn.php";

            $login_id = $_SESSION['login_id'];

            $sql = mysqli_query($conn, "SELECT * FROM tbl_instructor WHERE ins_id = '$login_id'") or die(mysqli_error());
            while ($result1 = mysqli_fetch_array($sql)) {
          ?>
            <img src="<?php echo $result1['ins_image']?>" alt="">
          
            <p><?php echo $result1['ins_name']; ?></p>
          <?php
          }
          ?>
        </div>

      </li>
      <br>
      <br>

      <li>
        <a href="../../teacher/Student/Grade/home.php" target="frame_body">
          <i class='bx bxs-home'></i>
          <span class="nav-item">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="../../teacher/Student/Grade/subject.php" target="frame_body">
          <i class='bx bx-list-ul'></i>
          <span class="nav-item">Class List</span>
        </a>
      </li>

      <li>
        <a href="../../teacher/Student/Grade/account.php" target="frame_body">
          <i class='bx bxs-user'></i>
          <span class="nav-item">My Account</span>
        </a>
      </li>

      <li>
        <a onclick="checker()" href="../../logout.php?logout" class="logout" target="_parent">
          <i class='bx bxs-exit'></i>
          <span class="nav-item">Log-out</span>
        </a>
      </li>

    </ul>
  </nav>


<script>
  let list = document.querySelectorAll('.list');
  for (let i=0; i<list.length; i++){
    list[i].onclick = function (){ 
      let j = 0;
      while(j < list.length){
        list[j++].className = 'list';
      }
      list[i].className = 'list active';
    }
        
    
  }
  </script>
<script>
  function checker() {
    var result = confirm('Are you sure you want to Logout?');
    if (result == false){
      event.preventDefault();
    }
  }
</script>
</body>
</html>