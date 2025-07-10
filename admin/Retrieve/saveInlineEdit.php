<?php
$sql = "UPDATE tbl_retrieved set " . $_POST["column"] . " = '".$_POST["value"]."'
 WHERE id=".$_POST["id"];
mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
?>