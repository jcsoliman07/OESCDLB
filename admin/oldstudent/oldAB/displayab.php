<?php

include "../db_conn.php";


$sql = "SELECT * FROM tbl_newstudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>