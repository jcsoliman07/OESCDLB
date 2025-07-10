<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_course ORDER BY crse_id";
$result = mysqli_query($conn, $sql);
?>