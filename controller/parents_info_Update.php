
<?php 
    require_once('../model/parents_model.php');
    if(isset($_POST['submit'])){

        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];

        
        

        $id=$_SESSION['p_id'];

        $parents = [	
            'email'	=> $email, 
            'phone'=> $phone, 
            'pass'=>$pass,
            'id' => $id
        ];
        $update=updateparents($parents);
        if($update)
        {
            header('location: ../view/parents_list.php');
        }
        else
        {
            echo "!error...try again!";   
        }
       
    }

?>