<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_student ORDER BY id";
$result = mysqli_query($conn, $sql);
?>