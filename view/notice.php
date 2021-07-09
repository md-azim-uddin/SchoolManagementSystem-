<?php
	$title = "Index Page";
    require_once('../model/exam_model.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Notice</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td align="center" width="550px"><h2><img src="../assets/logo.png" width="40px" height="60px" alt="">School Management System</h2></td>
            <td width="400px">
                    <a href="../project/view/teacher_reg.html"><button style="background-color: lightgreen;">Teacher Registration</button><a/><br>
                    <a href="../project/view/student_reg.html"><button style="background-color: lightgreen;">student Registration</button><a/><br>
                    <a href="../project/view/parents_reg.html"><button style="background-color: lightgreen;">Parents Registration</button><a/><br>
                     </td>
            <td align="center"><a href="../view/home.php">Home</a> | <a href="../view/admin_landingpage.php">User</a> | <a href="../view/admin_login.html">Admin Login</a> | <a href="view/Admin_registration.php">Admin Registration</a> | <a href="../controller/admin_logout.php">Logout</a></td>
        </tr>
        <tr>
            <td style="background-color:rgb(171, 178, 185);">
            <h3>Events Notice</h3>
                <?php
                
                    echo $_COOKIE['EventDate'].'<br>';
                    echo $_COOKIE['EventTime'].'<br>';
                    echo $_COOKIE['EDescription'].'<br>';
                
                ?>
            </td>
            <td  height="550px" align="center" style="background-color:lightblue;">
            <h3>Exam Notice</h3>
            <?php
                    $exams=getAllexams();
                    foreach($exams as $exam)
                    {
                        echo '<div width="300px" height="100px" style="border-radius: 4px; background-color:lightgreen;">
                        <h4>'.$exam['ExamDate'].'</h4>
                        <h4>'.$exam['ExamTime'].'</h4>
                        <h4>'.$exam['ExamDescription'].'</h4>
                        
                        </div>';
                    }
                 
                ?>
                   
            </td>
            <td style="background-color:rgb(171, 178, 185);">
            <h3>Funds Notice</h3>
                <?php
                
                    echo "<h4>Teacher's Fund:</h4>".$_COOKIE['teacherfund'].'<br>';
                    echo "<h4>Student's Fund:</h4>".$_COOKIE['studentfund'].'<br>';
                    echo "<h4>Total:</h4>".$_COOKIE['Total'].'<br>';
                
                ?>
                   
            </td>
            </td>
      
    </table>
</body>
</html>