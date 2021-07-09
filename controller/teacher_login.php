<?php
	sleep(4);

	include_once('../model/db_function.php');
    session_start();
    
    if (isset($_POST['submit'])) {

        if (empty($_POST['id']) || empty($_POST['pass'])) {
            echo"Please fill out all the fields"; 
        }
        else{
            $f=0;
			$id=$_POST['id'];
			$pass=$_POST['pass'];

			$data = login_teacher($id);

			// print_r($data);
			// echo $data['password'];

			
				if ($data['id']==$id and $data['password']==$pass) {
					$f=1;
					$_SESSION['nam']=$data['name'];
					$_SESSION['id']=$data['id'];
				}
			
			
			if($f==1){
				$_SESSION['flag'] = true;
				$name=$_POST['username'];
				
				//header('location: ../view/teacher_dashboard.php');
				header('location: ../controller/teacher_class_schedule.php');
			}
			else{
				echo"invaild user";
			}
        }
    }

?>