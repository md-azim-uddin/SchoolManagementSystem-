<?php 
    require_once('../model/student_model.php');
    if(isset($_POST['submit']))
    {
        if(empty($_POST['s_id']))
        {
            echo "null input";
        }
        else{
            $s_id=$_POST['s_id'];
            $status=deletestudents($s_id);
            if($status)
            {
                header('location: ../view/students_list.php');
            }
            else{
                "error";
            }
        }
    }
?>