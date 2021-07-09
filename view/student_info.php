<?php
	include('student_header.php');
	include_once('../model/userModel.php');

	$id=$_SESSION['id'];

	$data=getuserbyId($id);

			$namep=$data["name"];
			$id=$data["id"];
			$email=$data["email"];
			$bloodGroup=$data["bloodGroup"];
			$phone=$data["phone"];
			$address=$data["address"];
			$password=$data["password"];
			$gender=$data["gender"];
			$dateOfBirth=$data["dateOfBirth"];
			$picture=$data["picture"];

?>

<td align="center" colspan="2">
	<table border="5px" width="80%">
		<tr>
			<td>Name </td>
			<td>: <?php echo $namep ?></td> <br>
			
		</tr>
		<tr>
			<td>id </td>
			<td>: <?php echo $id ?> </td> <br>
		</tr>
		<tr>
			<td>email </td>
			<td>: <?php echo $email ?> </td> <br>
		</tr>
		<tr>
			<td>bloodGroup </td>
			<td>: <?php echo $bloodGroup ?> </td> <br>
		</tr>
		<tr>
			<td>phone </td>
			<td>: <?php echo $phone ?> </td> <br>
		</tr>
		<tr>
			<td>address </td>
			<td>: <?php echo $address ?> </td> <br>
		</tr>
		<tr>
			<td>password </td>
			<td>: <?php echo $password ?> </td> <br>
		</tr>
		<tr>
			<td>gender </td>
			<td>: <?php echo $gender ?> </td> <br>
		</tr>
		<tr>
			<td>dateOfBirth </td>
			<td>: <?php echo $dateOfBirth ?> </td> <br>
		</tr>
		<tr>
			<td>picture </td>
			<td>: <?php echo $picture ?> </td> <br>
		</tr>
	</table>






</td>

 <?php 
 	include('student_footer.php');
 ?>