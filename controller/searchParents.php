<?php
	
	//sleep(3);
	$phone = $_REQUEST['phone'];
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from parents where phone like '%{$phone}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
                        <td>Phone</td>
						<td>Id</td>
						<td>Name</td>
						<td>Email</td>
                        <td>Gender</td>
                        <td>Bloodgroup</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
                            <td>{$row['phone']}</td>
							<td>{$row['p_id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['bloodGroup']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>