<?php
							
					include_once('connection.php');
					    $subj_code = $_GET['subj_code'];


					  	$sql1 = "SELECT * FROM tbl_student_subjects WHERE subj_code='$subj_code'";
					  	$query1 = $conn->query($sql1);
					  	while($result2 = $query1->fetch_assoc()){
					  		$st_id = $result2['student_id'];
			
					  				
					  		if (($result2['final'] >= 98.5) AND ($result2['final'] <= 100)) 
					  		{
					  			$total1 = "1.00";
					  		}
					  		elseif (($result2['final'] >= 95.5 ) && ($result2['final'] <= 98.49))
					  		{
					  			$total1 = "1.25";
					  		}
					  		elseif (($result2['final'] >= 92.5 ) && ($result2['final'] <= 95.49))
					  		{
					  			$total1 = "1.50";
					  		}
					  		elseif (($result2['final'] >= 89.5 ) && ($result2['final'] <= 92.49))
					  		{
					  			$total1 = "1.75";
					  		}
					  		elseif (($result2['final'] >= 86.5 ) && ($result2['final'] <= 89.49))
					  		{
					  			$total1 = "2.00";
					  		}
					  		elseif (($result2['final'] >= 83.5 ) && ($result2['final'] <= 86.49))
					  		{
					  			$total1 = "2.25";
					  		}
					  		elseif (($result2['final'] >= 80.5 ) && ($result2['final'] <= 83.49))
					  		{
					  			$total1 = "2.50";
					  		}
					  				elseif (($result2['final'] >= 77.5 ) && ($result2['final'] <= 80.49))
					  		{
					  			$total1 = "2.75";
					  		}
					  		elseif (($result2['final'] >= 74.5 ) && ($result2['final'] <= 77.59))
					  		{
					  			$total1 = "3.00";
					  		}
					  		elseif (($result2['final'] >= 50 ) && ($result2['final'] <= 74.49))
					  		{
					  			$total1 = "5.00";
					  		}
					  		elseif (($result2['final'] <= '49' ) && ($result2['final'] >= '1'))
					  		{
					  			$total1 = "DRP";
					  		}
					  		elseif ($result2['final'] == 0 )
					  		{
					  			$total1 = "NG";
					  		}
					  				
					  		$sql1 = "SELECT * FROM tbl_student_subjects WHERE subj_code='$subj_code'";
					  	$query1 = $conn->query($sql1);
					  	while($result2 = $query1->fetch_assoc()){
					  		$st_id = $result2['student_id'];
			

					  		if ($total1 == 0){
					  			$remark = "  ";
					  		}
					  		elseif ($total1 <= 3){
					  			$remark = "Passed";
					  		}
					  		elseif (($total1 >= 3) && ($total1 <=5)){
					  			$remark = "Failed";
					  		}
					  				
					  		else{
					  			echo drop;
					  		}
					  		
 						
						?>