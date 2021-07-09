<?php 
    require_once("../model/db_connection.php");

    function add_teacher($teachers){
        
        $conn_status=db_connect();
        
        $sql="insert into teacher values('{$teachers['id']}', '{$teachers['name']}',
            '{$teachers['desig']}', '{$teachers['email']}', '{$teachers['bloodGroup']}',
            '{$teachers['phone']}', '{$teachers['address']}', '{$teachers['pass']}', 
            '{$teachers['gender']}', '{$teachers['dob']}', '{$teachers['profilePic']}', '{$teachers['qualification']}')";
        
        $result=mysqli_query($conn_status, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function login_teacher($id){
        $conn_status=db_connect();
        $sql="select name, id, password from teacher where id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function all_data($id){
        $conn_status=db_connect();
        $sql="select * from teacher where id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function class_schedule($id){
        $conn_status=db_connect();
        $sql="select * from class_assign where teacher_id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $classes=[];
        
        while($row=mysqli_fetch_assoc($result)){
            array_push($classes, $row);
        }
        return $classes;
    }

    function getStudentbyClass($class){
        $conn_status=db_connect();
        $sql="select * from student where class='{$class}' ";
        $result=mysqli_query($conn_status, $sql);
        $data=[];

        while($row=mysqli_fetch_assoc($result)){
            array_push($data, $row);
        }
        return $data;
    }

    function uploadFile($subj, $path){
        $conn_status=db_connect();
        $sql="insert into upload values('', $subj, $path)";
        $result=mysqli_query($conn_status, $sql);
        return $result;
    }

    function getStudentResultbyClass($class){
        $conn_status=db_connect();
        $sql="select * from result where class='{$class}'";
        $result=mysqli_query($conn_status, $sql);
        $data=[];
        while($row=mysqli_fetch_assoc($result)){
            array_push($data, $row);
        }
        return $data;
    }

    function passChange($id,$new_pass){
        $conn_status=db_connect();
        $sql = "update teacher set password='{$new_pass}' where id='{$id}'";
        $result=mysqli_query($conn_status, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function getStudentbyName($name){
        $conn_status=db_connect();
        $sql="select * from student where name like '%{$name}%'";
        $result=mysqli_query($conn_status, $sql);
        $data2=[];

        while($row=mysqli_fetch_assoc($result)){
            array_push($data2, $row);
        }
        return $data2;
    }

    // function addAttendance($data){
    //     $conn_status=db_connect();
    //     $sql="insert into attendance values('', '{$data}'";
    //     $result=mysqli_query($conn_status, $sql);
    //     if($result){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }
?>