<?php
	
	//sleep(3);
	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from teachers where name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>Id</td>
						<td>Name</td>
						<td>Email</td>
                        <td>Designation</td>
						<td>Phone</td>
                        <td>Address</td>
                        <td>Gender</td>
                        <td>Bloodgroup</td>
					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['t_id']}</td>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
							<td>{$row['designation']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['bloodGroup']}</td>
						</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>