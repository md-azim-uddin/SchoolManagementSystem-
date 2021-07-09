<?php 
require_once('../model/student_model.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['s_id'])){
            echo"Plaese fill out all the field <br>";
        }
        else{
            $t_id=$_POST['s_id'];
            $student=getstudentsbyId($t_id);
            if($student=="")
            {
                echo "Invalid id input";
            }
            else{
                $_SESSION['s_id']=$s_id;
                $_SESSION['name']=$student['name'];
                $_SESSION['email']=$student['email'];
                $_SESSION['phone']=$student['phone'];
                $_SESSION['Class']=$student['Class'];
                $_SESSION['pass']=$student['pass'];
                Header('location: ../view/StudentinfoUpdate.php');
                
                
                
            }
           


                
                    
                

            

            
        }
    }

?>