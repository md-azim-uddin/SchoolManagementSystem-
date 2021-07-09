<?php
    session_start();
   	require_once('../model/userModel.php');

    
    if (isset($_POST['submit'])) {

        /*$inp = file_get_contents('../model/student.json');
		$temp = json_decode($inp, true);*/
		$id = $_POST['id'];
		$password = $_POST['pass'];


        if (empty($_POST['id']) || empty($_POST['pass'])) {
            echo"Please fill out all the fields"; 
        }
        else{
            $status = validateUser($id, $password);

            if($status){
				$_SESSION['flag'] = true;
				$_SESSION['id'] = $id;

				header('location: ../view/student_dashboard.php');
			}else{
				echo "invalid user...";
			}
            				

			
        }
    }

?>