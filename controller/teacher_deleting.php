<?php 
    require_once('../model/teacher_model.php');
    if(isset($_POST['submit']))
    {
        if(empty($_POST['t_id']))
        {
            echo "null input";
        }
        else{
            $t_id=$_POST['t_id'];
            $status=deleteteacher($t_id);
            if($status)
            {
                header('location: ../view/teachers_list.php');
            }
            else{
                "error";
            }
        }
    }
?>