<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_csstudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>