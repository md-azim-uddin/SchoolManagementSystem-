<?php
	
	//sleep(3);
	$Class = $_REQUEST['Class'];
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from students where Class like '%{$Class}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                        <td>Class</td>
						<td>Id</td>
						<td>Name</td>
						<td>Email</td>
						<td>Phone</td>
                        <td>Gender</td>
                        <td>Bloodgroup</td>
                        <td>Date Of Birth</td>
                        
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                            <td>{$row['Class']}</td>
							<td>{$row['s_id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['bloodGroup']}</td>
                            <td>{$row['dob']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>