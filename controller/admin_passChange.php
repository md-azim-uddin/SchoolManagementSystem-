<?php 
require_once('../model/admin_model.php');
    if (isset($_POST['submit'])) {
        if (empty($_POST['id'] || $_POST['pass'])) {
            echo"fields cannot be empty";
        }
        else{
            $id=$_POST['id'];
            $new_pass=$_POST['pass'];

            $error=false;
            if(strlen($new_pass)<6){
                echo "password must contain at least 6 charecters <br>";
                $error=true;
            }
            if(!strpos($new_pass, '0') and !strpos($new_pass, '1') and !strpos($new_pass, '2') and !strpos($new_pass, '3') and !strpos($new_pass, '4') and !strpos($new_pass, '5') and !strpos($new_pass, '6') and !strpos($new_pass, '7') and !strpos($new_pass, '8') and !strpos($new_pass, '9')){
                echo "password must contain atleast one number  <br>";
                $error=true;
            }

            elseif($error==false){
                
                $admins=
                [
                    'pass'=>$new_pass,
                    'id'=>$id
                ];
                $status=updateadminPassword($admins);
               
                if($status)
                {
                    Header('location: ../view/admin_login.html');
                }
                else{
                    echo $status;
                    echo "error";
                }
                    
            }
    
        
        }

    }

?>