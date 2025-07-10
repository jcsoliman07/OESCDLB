<?php

include "db_conn.php";


$sql = "SELECT * FROM tbl_approvalcs ORDER BY id";
$result = mysqli_query($conn, $sql);
?>