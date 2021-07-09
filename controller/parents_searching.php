<?php 
session_start();
require_once('../model/parents_model.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['p_id'])){
            echo"Plaese fill out all the field <br>";
        }
        else{
            $p_id=$_POST['p_id'];
            $parents=getparentsbyId($p_id);
            if($parents=="")
            {
                echo "Invalid id input";
            }
            else{
                $_SESSION['p_id']=$p_id;
                $_SESSION['email']=$parents['email'];
                $_SESSION['phone']=$parents['phone'];
                $_SESSION['pass']=$parents['pass'];
                Header('location: ../view/parentsinfoUpdate.php');
                
                
                
            }
           


                
                    
                

            

            
        }
    }

?>