<?php
    require_once('../model/admin_model.php');
	if(isset($_POST['submit'])){
        //$data = json_decode(file_get_contents('../model/admin.json'),true);
        if(empty($_POST['id']) || empty($_POST['pass']))
        {
            echo "Please fill out all the fields";
        }
        else{
            $id=$_POST['id'];
            $pass=$_POST['pass'];
            $status=validateadmin($id,$pass);
            
            if($status)
            {
                $admin=getadminbyId($id);
                //print_r($admin);
                $_SESSION['name']=$admin['name'];
                        $_SESSION['id']=$admin["id"];
                        $_SESSION['email']=$admin["email"];
                        $_SESSION['designation']=$admin["designation"];
                        $_SESSION['gender']=$admin["gender"];
                        $_SESSION['bloodGroup']=$admin["bloodGroop"];
                        $_SESSION['phone']=$admin["phone"];
                        $_SESSION['address']=$admin["address"];
                        $_SESSION['dob']=$admin["dob"];
                        $_SESSION['qualification']=$admin["qualification"];
                        $_SESSION['profilePic']=$admin["profilePic"];
                    header('location: ../view/admin_usermanip.php');
			}
			else
            {
				echo"invaild user";
			}
        
        
        }
    }
    ?>