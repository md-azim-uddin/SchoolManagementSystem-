<?php
	$name = $_REQUEST['name'];
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from offeredcourses where name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1 width='100px'>
					<tr>
						<td>Course Name</td>
						<td>Section</td>
						<td>Capacity</td>
                        <td>Class</td>
						<td>Start Time</td>
						<td>End Time</td>
						<td>Day</td>
						<td> Room No. </td>

					</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							<td>{$row['name']}</td>
							<td>{$row['section']}</td>
							<td>{$row['capacity']}</td>
							<td>{$row['class']}</td>
                            <td>{$row['starttime']}</td>
                            <td>{$row['endtime']}</td>
                            <td>{$row['day']}</td>
                            <td>{$row['room']}</td>
                            
							</tr>";
	}

	$response .= "</table>";
	
	echo $response;	
?>
