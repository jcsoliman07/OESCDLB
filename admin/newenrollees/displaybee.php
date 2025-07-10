<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_beestudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>