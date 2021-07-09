<?php
session_start(); 
require_once('../model/exam_model.php');
if(isset($_POST['submit']))
{
    if(empty($_POST['ExamDate']) || empty($_POST['ExamTime'])|| empty($_POST['ExamDescription']))
    {
        echo 'Null value found';
    }
    else
    {
        $ExamDate =$_POST['ExamDate'];
        $ExamTime =$_POST['ExamTime'];
        $ExamDescription =$_POST['ExamDescription'];
        
        
        
        $ExamData=['ExamDate'=>$ExamDate,'ExamTime'=>$ExamTime,'ExamDescription'=>$ExamDescription];
        $status=insertexams($ExamData);
        if($status)
        {
            header('location: ../view/notice.php');
        }
        else
        {
            echo "!error...try again!";   
        }

        
        // setcookie('ExamDate',$ExamDate, time()+(86500*30),'/');
        // setcookie('ExamTime',$ExamTime, time()+(86500*30),'/');
        // setcookie('ExamDescription',$ExamDescription, time()+(86500*30),'/');
        
        
           
    }
}