<?php
session_start(); 
if(isset($_POST['submit']))
{
    if(empty($_POST['teacherfund']) || empty($_POST['studentfund'])|| empty($_POST['Total']))
    {
        echo 'Null value found';
    }
    else
    {
        $teacherfund =$_POST['teacherfund'];
        $studentfund =$_POST['studentfund'];
        $Total =$_POST['Total'];
        
        
        $Funds=['teacherfund'=>$teacherfund,'studentfund'=>$studentfund,'Total'=>$Total,];

        if(filesize('../Model/Funds.json')==0){
            $json=json_encode($Funds);
            $myfile=fopen('../Model/Funds.json', 'w');
            fwrite($myfile, '['.$json.']');
        }
        else{
            $inp = file_get_contents('../Model/Funds.json');
            $tempArray = json_decode($inp);
            array_push($tempArray, $calender);
            $jsonData = json_encode($tempArray);
            file_put_contents('../Model/events.json', $jsonData);
        }
        setcookie('teacherfund',$teacherfund, time()+(86500*30),'/');
        setcookie('studentfund',$studentfund, time()+(86500*30),'/');
        setcookie('Total',$Total, time()+(86500*30),'/');
        
        header('location: ../view/notice.php');
           
    }
}