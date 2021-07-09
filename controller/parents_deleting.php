<?php 
    require_once('../model/parents_model.php');
    if(isset($_POST['submit']))
    {
        if(empty($_POST['p_id']))
        {
            echo "null input";
        }
        else{
            $p_id=$_POST['p_id'];
            $status=deleteparents($p_id);
            if($status)
            {
                header('location: ../view/parents_list.php');
            }
            else{
                "error";
            }
        }
    }
?>