
<?php 
    require_once('../model/teacher_model.php');
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $designation=$_POST['designation'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $pass=$_POST['pass'];
        $qualification=$_POST['qualification'];

        
        

        $id=$_SESSION['t_id'];

        $teachers = [	
            'name'	=> $name, 
            'designation'=> $designation, 
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$address,
            'pass'=>$pass,
            'qualification'=>$qualification,
            'id' => $id
        ];
        $update=updateteachers($teachers);
        if($update)
        {
            header('location: ../view/teachers_list.php');
        }
        else
        {
            echo "!error...try again!";   
        }
       
    }

?>