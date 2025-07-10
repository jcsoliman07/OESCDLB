<?php

//fetch.php

include('database_connection.php');

$column = array("id", "student_id", "lname","fname", "mname", "subj_code", "subj_course", "subj_year", "subj_sem","prelim", "midterm", "prefi", "finals");

$query = "SELECT * FROM tbl_retrieved ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE student_id LIKE "%'.$_POST["search"]["value"].'%" 
 OR lname LIKE "%'.$_POST["search"]["value"].'%"
 OR subj_code LIKE "%'.$_POST["search"]["value"].'%"
 OR subj_course LIKE "%'.$_POST["search"]["value"].'%" 
 OR subj_year LIKE "%'.$_POST["search"]["value"].'%"
 OR subj_sem LIKE "%'.$_POST["search"]["value"].'%"  
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id ASC ';
}
$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['id'];
 $sub_array[] = $row['student_id'];
 $sub_array[] = $row['lname'];
 $sub_array[] = $row['fname'];
 $sub_array[] = $row['mname'];
 $sub_array[] = $row['subj_code'];
 $sub_array[] = $row['subj_course'];
 $sub_array[] = $row['subj_year'];
 $sub_array[] = $row['subj_sem'];
 $sub_array[] = $row['prelim'];
 $sub_array[] = $row['midterm'];
 $sub_array[] = $row['prefi'];
 $sub_array[] = $row['finals'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tbl_retrieved";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data
);

echo json_encode($output);

?>