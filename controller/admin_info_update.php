
<?php 
    session_start();
    require_once('../model/admin_model.php');
    if(isset($_POST['submit'])){
        $id=$_SESSION['id'];
        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $qualification=$_POST['qualification'];


        $admins = [	
            'name'	=> $name, 
            'designation'=> $designation, 
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'qualification'=>$qualification,
            'id' => $id
        ];
        $update=updateadmins($admins);
        if($update)
        {
            header('location: ../view/admin_login.html');
        }
        else
        {
            echo "!error...try again!";   
        }
       
    }

?>