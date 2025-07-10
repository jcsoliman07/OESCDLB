<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_approvalstudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>