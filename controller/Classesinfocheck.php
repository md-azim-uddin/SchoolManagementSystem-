<?php
	
	$Class = $_REQUEST['Class'];
    $classStartTime = $_REQUEST['classStartTime'];
    $classEndTime = $_REQUEST['classEndTime'];
    $t_id = $_REQUEST['t_id'];
    $subjectName = $_REQUEST['subjectName'];
    
	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "insert into classes values('', '$Class', '$classStartTime', '$classEndTime', '$t_id', '$subjectName')";
	$result = mysqli_query($conn, $sql);

    $ID = mysqli_insert_id($conn);

    $result = mysqli_query($conn, "SELECT * FROM classes");

    if(mysqli_num_rows($result)>0)
    {
        $response = "<table >
                        <tr>
                        <td><u>Class</u></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><u>Start Time</u></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><u>Finish Time </u></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><u>teacher id</u></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td><u>Subject</u></td>
                            
                            
                        </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $response .= 	"<tr>
                                <td>{$row['class']}</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>{$row['classStartTime']}</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>{$row['classEndTime']}</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>{$row['t_id']}</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>{$row['subjectName']}</td>
                                
                            </tr>";
        }

        $response .= "</table>";
        
        echo $response;	
    }
    else{
        echo "Invalid";
    }
?>