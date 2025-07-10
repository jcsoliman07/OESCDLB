<?php

//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':prelim'  => $_POST['prelim'],
  ':midterm'  => $_POST['midterm'],
  ':prefi'   => $_POST['prefi'],
  ':finals'   => $_POST['finals'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE tbl_retrieved 
 SET prelim = :prelim, 
 midterm = :midterm, 
 prefi = :prefi,
 finals = :finals
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tbl_retrieved 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>