<?php

include "../db_conn.php";


$sql = "SELECT * FROM tbl_enrolledcs ORDER BY id";
$result = mysqli_query($conn, $sql);
?>