<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_bastudent ORDER BY id";
$result = mysqli_query($conn, $sql);
?>