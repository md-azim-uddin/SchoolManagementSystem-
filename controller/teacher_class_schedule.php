<?php
    session_start();
    include_once('../model/db_function.php');

    $id=$_SESSION['id'];
    $data=class_schedule($id);

    //print_r($data);
    $i=0;
    foreach($data as $c){
        if ($c["teacher_id"]==$_SESSION['id']) {
            setcookie('subject'.$i, $c["subject"], time()+3600, '/');
            setcookie('startTime'.$i, $c["start_time"], time()+3600, '/');
            setcookie('endTime'.$i, $c["end_time"], time()+3600, '/');
            setcookie('class'.$i, $c["class"], time()+3600, '/');
            $i++;
            header('location: ../view/teacher_dashboard.php');
        }
    }
   
?>