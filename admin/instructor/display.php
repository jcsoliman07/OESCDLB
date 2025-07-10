<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_instructor ORDER BY subj_id";
$result = mysqli_query($conn, $sql);
?>