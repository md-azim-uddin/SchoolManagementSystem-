<?php
	include('student_header.php');
	include_once('../model/userModel.php');
	include_once('../model/resultModel.php');

	$id=$_SESSION['id'];

	$data=getuserbyId1($id);
	$id=$data["id"];
	$midterm=$data["midterm"];
	$finalterm=$data["finalterm"];
	$total=$data["total"];

?>

<td align="center" colspan="2">
	<table border="5px" width="80%">
		<tr>
			<td>id </td>
			<td>: <?php echo $id ?> </td> <br>
		</tr>
		<tr>
			<td>midterm </td>
			<td>: <?php echo $midterm ?> </td> <br>
		</tr>
		<tr>
			<td>finalterm </td>
			<td>: <?php echo $finalterm ?> </td> <br>
		</tr>
		<tr>
			<td>total </td>
			<td>: <?php echo $total ?> </td> <br>
		</tr>
	</table>


</td>

 <?php 
 	include('student_footer.php');
 ?>

