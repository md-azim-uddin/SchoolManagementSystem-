
<?php 
    require_once('../model/student_model.php');
    if(isset($_POST['submit'])){

        
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $Class=$_POST['Class'];
        $pass=$_POST['pass'];

        
        

        $id=$_SESSION['s_id'];

        $students = [	 
            'email'=>$email,
            'phone'=>$phone,
            'Class'=>$Class,
            'pass'=>$pass,
            'id' => $id
        ];
        $update=updatestudents($students);
        if($update)
        {
            header('location: ../view/students_list.php');
        }
        else
        {
            echo "!error...try again!";   
        }
       
    }

?>