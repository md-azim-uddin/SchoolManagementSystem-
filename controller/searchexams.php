<?php
	
	//sleep(3);
	$ExamDescription = $_REQUEST['ExamDescription'];
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from exams where ExamDescription like '%{$ExamDescription}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Id</td>
						<td>Exam Date</td>
                        <td>Exam Time</td>
                        <td>Exam Type</td>
                        
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['e_id']}</td>
							<td>{$row['ExamDate']}</td>
							<td>{$row['ExamTime']}</td>
                            <td>{$row['ExamDescription']}</td>
                            
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>