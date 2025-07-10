<?php
	require'db_conn.php';

	if (isset($_POST['filter'])) {
		$yearSem = $_POST['yearSem'];

		$query = mysqli_query($conn,"SELECT * FROM `tbl_subjects` WHERE `subj_year`='$yearSem'") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query))
		{
			echo "string";
			echo "<input type='text' name='subj_id' value='".$fetch['subj_id']."'>";
		}
	}


?>