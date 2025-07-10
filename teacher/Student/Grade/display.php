<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_instructor_subjects ORDER BY id";
$result = mysqli_query($conn, $sql);
?>