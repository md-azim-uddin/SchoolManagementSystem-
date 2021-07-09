<?php 

require_once('../model/teacher_model.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['designation']) || empty($_POST['address']) || empty($_POST['bloodGroup']) || empty($_POST['pass']) || empty($_POST['cPass']) || empty($_POST['dob'])){
            echo"Plaese fill out all the field <br>";
        }
        else{
            
            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePicteacher"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imagesize=$_FILES["profilePicteacher"]["size"];

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            
            if ($temp_dob[0]>2000) {
                echo"Please select year before 2000. <br>";
            }
            else{
                $name= $_POST['name'];
                $designation=$_POST['designation'];
                $email= $_POST['email'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $gender=$_POST['gender'];
                $pass = $_POST['pass'];
                $cPass=$_POST['cPass'];
                $dob=$_POST['dob'];
                move_uploaded_file($_FILES['profilePicteacher']['tmp_name'], '../assets/'.$_FILES['profilePicteacher']['name']);
                $profilePic='../assets/'.$_FILES['profilePicteacher']['name'];
                $bloodGroop=$_POST['bloodGroup'];
                $qualification=$_POST['qualification'];
                
                $error=false;

                if(strlen($name)<3){
                    echo "name must contain at least 3 charecters<br>";
                    $error=true;
                }
                if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || strpos($name, '%') || strpos($name, '&')){
                    echo "name cannot contain any special charecter<br>";
                    $error=true;
                }
                if(strlen($phone)<11 || strlen($phone)>11 ){
                    echo "phone no. must contain 11 digit <br>";
                    $error=true;
                }
                if(strlen($pass)<6){
                    echo "password must contain at least 6 charecters <br>";
                    $error=true;
                }
                if(!strpos($pass, '0') and !strpos($pass, '1') and !strpos($pass, '2') and !strpos($pass, '3') and !strpos($pass, '4') and !strpos($pass, '5') and !strpos($pass, '6') and !strpos($pass, '7') and !strpos($pass, '8') and !strpos($pass, '9')){
                    echo "password must contain atleast one number  <br>";
                    $error=true;
                }
                
                if ($pass!=$cPass) {
                    echo"please check your password and confirm password<br>";
                    $error=true;
                }



                elseif($error==false){
                    $teacher=[
                    'name'=> $name, 
                    'designation'=>$designation,
                    'email'=> $email, 
                    'bloodGroup'=> $bloodGroop , 
                    'phone'=>$phone, 
                    'address'=>$address, 
                    'pass'=>$pass, 
                    'gender'=> $gender,
                    'dob'=>$dob, 
                    'profilePic'=>$profilePic, 
                    'qualification'=>$qualification ];
                    $status=insertteacher($teacher);
                    if($status)
                    {
                        header('location: ../view/admin_usermanip.php');
                    }
                    else
                    {
                     echo "!error...try again!";   
                    }
                    
                }

            }

            
        }
    }

?>