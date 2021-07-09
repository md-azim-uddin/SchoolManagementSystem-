<?php 
    session_start();
    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $id=$_POST['id'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        $address=$_POST['address'];
        $pass = $_POST['pass'];
        $cPass=$_POST['cPass'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        move_uploaded_file($_FILES['profilePic']['tmp_name'], '../assets/'.$_FILES['profilePic']['name']);
        $profilePic='../assets/'.$_FILES['profilePic']['name'];
        $bloodGroup=$_POST['bloodGroup'];
        

        if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['email']) || empty($_POST['phone']) ||  empty($_POST['address']) || empty($_POST['bloodGroup']) || empty($_POST['pass']) || empty($_POST['cPass']) || empty($_POST['dob']) || empty($_POST['gender']) )
        {
            echo"Plaese fill out all the field";
        }

        else{
            //validation check

            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            if ($temp_dob[0]>2015) {
                echo"Please select year before 2015.";
            }
            else{
                $user=['name'=> $name, 'id'=>'S'.$id, 'email'=> $email, 'bloodGroup'=> $bloodGroup , 'phone'=>$phone, 'address'=>$address, 'password'=>$pass, 'gender'=>$gender,  'dateOfBirth'=>$dob, 'picture'=>$profilePic];

                $status = insertUser($user);

                if ($status) {
                    header('location: ../view/login.html');
                }

                if ($pass!=$cPass) {
                    echo"please check your password and confirm password";
                }
                
                else{
                  
                    echo "error..try again";
                    
                }
            }



        }
    }

?>