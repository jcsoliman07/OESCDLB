<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_bsestudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>