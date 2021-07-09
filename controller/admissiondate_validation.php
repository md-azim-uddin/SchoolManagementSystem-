<?php
session_start(); 
if(isset($_POST['submit']))
{
    if(empty($_POST['admissionDate']) || empty($_POST['admissionTime'])|| empty($_POST['admissionclass']))
    {
        echo 'Null value found';
    }
    else
    {
        $admissionDate =$_POST['admissionDate'];
        $admissionTime =$_POST['admissionTime'];
        $admissionclass =$_POST['admissionclass'];
        
        
        $admission=['admissionDate'=>$admissionDate,'admissionTime'=>$admissionTime,'admissionclass'=>$admissionclass,];
        //print_r($admission);
        setcookie('admissionDate',$admissionDate, time()+(86500*30),'/');
        setcookie('admissionTime',$admissionTime, time()+(86500*30),'/');
        setcookie('admissionclass',$admissionclass, time()+(86500*30),'/');
        
        header('location: ../view/notice.php');
           
    }
}