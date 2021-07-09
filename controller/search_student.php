<?php
    include_once('../model/db_function.php');

    $name = $_REQUEST['name'];

    $data=getStudentbyName($name);

    $response = "<table border=2>
					<tr>
						<td>Id</td>
						<td>name</td>
                        <td>class</td>
						<td>email</td>
						<td>phone</td>
                        <td>picture</td>
					</tr>";
                foreach($data as $var){
                $response .= "
                                <tr>
                                    <td>{$var['ID']}</td>
                                    <td>{$var['name']}</td>
                                    <td>{$var['class']}</td>
                                    <td>{$var['email']}</td>
                                    <td>{$var['phone']}</td>
                                    <td><img src='{$var['picture']}' width='40px' height='40px'></td>
                                    </td> 
                                </tr>";
                    }
	$response .= "</table>";
	echo $response;	

?>