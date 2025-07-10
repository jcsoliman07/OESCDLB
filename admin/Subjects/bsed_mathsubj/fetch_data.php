<?php include('connection.php');

$output= array();
$course = 'BSBA';
$sql = "SELECT * FROM `tbl_subjects` ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'subj_id',
	1 => 'subj_code',
	2 => 'subj_description',
	3 => 'subj_unit',
	4 => 'subj_prereq',
	5 => 'subj_course',
	6 => 'subj_major',
	7 => 'subj_year',
	8 => 'subj_semester',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE subj_code like '%".$search_value."%'";
	$sql .= " OR subj_description like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= "ORDER BY subj_course ASC, subj_major ASC";
	// $sql .= "WHERE subj_course = ''";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();

while($row = mysqli_fetch_assoc($query))
{
	// $course = $row['subj_course'];
	// $major = $row['Financial Management'];

	// $q = mysqli_query($con,"SELECT * FROM tbl_subjects WHERE subj_course='$course' AND subj_major='$major'");

	// while($fetch = mysqli_fetch_assoc($q)){
	// 	$sub_array = array();
	// 		$sub_array[] = $fetch['subj_id'];
	// 		$sub_array[] = $fetch['subj_code'];
	// 		$sub_array[] = $fetch['subj_description'];
	// 		$sub_array[] = $fetch['subj_unit'];
	// 		$sub_array[] = $fetch['subj_prereq'];
	// 		$sub_array[] = $fetch['subj_course'];
	// 		$sub_array[] = $fetch['subj_major'];
	// 		$sub_array[] = $fetch['subj_year'];
	// 		$sub_array[] = $fetch['subj_semester'];
	// 		$sub_array[] = '<a href="javascript:void();" data-id="'.$fetch['subj_id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$fetch['subj_id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';

	// 		$data[] = $sub_array;
	// }
	if ($row['subj_course'] == 'BSED') {
		if ($row['subj_major'] == 'Mathematics') {
			$sub_array = array();
			$sub_array[] = $row['subj_id'];
			$sub_array[] = $row['subj_code'];
			$sub_array[] = $row['subj_description'];
			$sub_array[] = $row['subj_unit'];
			$sub_array[] = $row['subj_prereq'];
			$sub_array[] = $row['subj_course'];
			$sub_array[] = $row['subj_major'];
			$sub_array[] = $row['subj_year'];
			$sub_array[] = $row['subj_semester'];
			$sub_array[] = '<a href="javascript:void();" data-id="'.$row['subj_id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['subj_id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';

			$data[] = $sub_array;
		}
	}
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' => $count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
