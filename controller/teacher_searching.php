<?php 
session_start();
require_once('../model/teacher_model.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['t_id'])){
            echo"Plaese fill out all the field <br>";
        }
        else{
            $t_id=$_POST['t_id'];
            $teacher=getteacherbyId($t_id);
            if($teacher=="")
            {
                echo "Invalid id input";
            }
            else{
                $_SESSION['t_id']=$t_id;
                $_SESSION['name']=$teacher['name'];
                $_SESSION['designation']=$teacher['designation'];
                $_SESSION['email']=$teacher['email'];
                $_SESSION['phone']=$teacher['phone'];
                $_SESSION['address']=$teacher['address'];
                $_SESSION['pass']=$teacher['pass'];
                $_SESSION['qualification']=$teacher['qualification'];
                $_SESSION['profilePic']=$teacher['profilePic'];
                Header('location: ../view/TeacherinfoUpdate.php');
                
                
                
            }
           


                
                    
                

            

            
        }
    }

?>