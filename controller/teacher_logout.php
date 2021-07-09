<?php
	session_start();
	unset($_SESSION['flag']);
    include_once('../model/db_function.php');

    $id=$_SESSION['id'];
    $data=class_schedule($id);
    $i=0;
    
            setcookie('subject0', null, time()-3600, '/');
            setcookie('startTime0', null, time()-3600, '/');
            setcookie('endTime0', null, time()-3600, '/');
            setcookie('class0', null, time()-3600, '/');

            setcookie('subject0', null, time()-3600, '/');
            setcookie('startTime0', null, time()-3600, '/');
            setcookie('endTime0', null, time()-3600, '/');
            setcookie('class0', null, time()-3600, '/');

            setcookie('subject2', null, time()-3600, '/');
            setcookie('startTime2', null, time()-3600, '/');
            setcookie('endTime2', null, time()-3600, '/');
            setcookie('class2', null, time()-3600, '/');

            setcookie('subject3', null, time()-3600, '/');
            setcookie('startTime3', null, time()-3600, '/');
            setcookie('endTime3', null, time()-3600, '/');
            setcookie('class3', null, time()-3600, '/');
           
        
    

	header('location: ../view/teacher_login.html');

?>