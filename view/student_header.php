<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    //$name=$_SESSION['nam'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body style="background-size: auto;">
	<fieldset>
		<legend style="background: bisque">Student</legend>
		<table border="5" width="100%" align="center">
			<tr>
				<td width="100px">
					<img src="../assets/logo.png" width="100px" height="100px">
				</td>
				<td colspan="0" height="80px" align="right">
					<div style="background: beige ; " align="right">
						<h2>
							<a href="student_info.php">Welcome, <?php echo $_SESSION['id']; ?> </a> | <a href="student_dashboard.php"> Home </a>  | <a href="../controller/student_logout.php"> Logout </a> 

						</h2>
						
					</div>
					
				</td>
			</tr>
			
			<tr align="left" height="500px" width="1000px">
				<td class="menu">
					<div>
						<a href="student_info.php"><h4>Student Information</h4></a>
						<a href="sresult.php"><h4>Student Result</h4></a>
						<a href="student_assignment.php"><h4>Student Assignment</h4></a>
						<a href="s_academic_calender.php"><h4>Academic Calender</h4></a>
						<a href="spayment.php"><h4>Paymment Status</h4></a>
						<a href="sattendence.php"><h4>Student Attendence</h4></a>
						<a href="scourse.php"><h4>Offered Courses</h4></a>
						<a href="s_download_form.php"><h4>Forms Download</h4></a>
						<a href="s_important_links.php"><h4>Important Links</h4></a>
					</div>
				</td>
				
				