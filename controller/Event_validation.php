<?php
session_start(); 
if(isset($_POST['submit']))
{
    if(empty($_POST['EventDate']) || empty($_POST['EventTime'])|| empty($_POST['EDescription']))
    {
        echo 'Null value found';
    }
    else
    {
        $eventdate =$_POST['EventDate'];
        $eventtime =$_POST['EventTime'];
        $edescription =$_POST['EDescription'];
        
        
        $events=['EventDate'=>$eventdate,'EventTime'=>$eventtime,'EDescription'=>$edescription,];
        setcookie('EventDate',$eventdate, time()+(86500*30),'/');
        setcookie('EventTime',$eventtime, time()+(86500*30),'/');
        setcookie('EDescription',$edescription, time()+(86500*30),'/');
        
        header('location: ../view/notice.php');
           
    }
}