<?php 
    require_once('../model/student_model.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['bloodGroup']) 
        || empty($_POST['phone']) || empty($_POST['pass']) || empty($_POST['cPass']) || 
        empty($_POST['gender']) || empty($_POST['Class']) || empty($_POST['dob']))
        {
            echo"Plaese fill out all the field <br>";
        }
        else
        {
            
            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imagesize=$_FILES["profilePic"]["size"];

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
            {
                echo "only jpeg, jpg & png files are allowed.";
            }
            
            if ($temp_dob[0]>2016) 
            {
                echo"Please select year before 2016. <br>";
            }
            else{
                $name= $_POST['name'];
                $email=$_POST['email'];
                $bloodGroup= $_POST['bloodGroup'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass'];
                $cPass=$_POST['cPass'];
                $gender=$_POST['gender'];
                $Class=$_POST['Class'];
                $dob=$_POST['dob'];
                move_uploaded_file($_FILES['profilePic']['tmp_name'], '../assets/'.$_FILES['profilePic']['name']);
                $profilePic='../assets/'.$_FILES['profilePic']['name'];
                
                $error=false;

                if(strlen($name)<3){
                    echo "name must contain at least 3 charecters<br>";
                    $error=true;
                }
                if(strpos($name, '!') || strpos($name, '@') || strpos($name, '#') || strpos($name, '%') || strpos($name, '&')){
                    echo "name cannot contain any special charecter<br>";
                    $error=true;
                }
                if(strlen($phone)!=11){
                    echo "phone no. must contain 11 digit <br>";
                    $error=true;
                }
                if(strlen($pass)<4){
                    echo "password must contain at least 4 charecters <br>";
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
                    $students=[
                    'name'=> $name, 
                    'email'=> $email, 
                    'bloodGroup'=> $bloodGroup , 
                    'phone'=>$phone, 
                    'pass'=>$pass, 
                    'gender'=> $gender,
                    'dob'=>$dob,
                    'Class'=>$Class, 
                    'profilePic'=>$profilePic];
                    $status=insertstudents($students);
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
