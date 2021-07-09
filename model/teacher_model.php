<?php
//session_start();
require_once('db.php');
function insertteacher($teacher){
	$conn = getConnection();
	$sql = "insert into teachers values('', '{$teacher['name']}', '{$teacher['designation']}', '{$teacher['email']}', '{$teacher['phone']}', '{$teacher['address']}', '{$teacher['gender']}', '{$teacher['pass']}', '{$teacher['dob']}', '{$teacher['profilePic']}', '{$teacher['bloodGroup']}', '{$teacher['qualification']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function validateteacher($id, $pass){
	$conn = getConnection();
	$sql = "select * from teachers where t_id='{$id}' and pass='{$pass}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    
    
	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}
function getteacherbyId($id){
	
	$conn = getConnection();
	$sql = "select * from teachers where t_id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function getAllteachers(){

	$conn = getConnection();
	$sql = "select * from teachers";
	$result = mysqli_query($conn, $sql);
	$teachers = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($teachers, $row);
	}
	return $teachers;
}
function updateteachers($teachers){
    $conn = getConnection();
    $sql = "update teachers set name='{$teachers['name']}', designation='{$teachers['designation']}', email='{$teachers['email']}',phone='{$teachers['phone']}',address='{$teachers['address']}', pass='{$teachers['pass']}',qualification='{$teachers['qualification']}' where t_id='{$teachers['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
function deleteteacher($t_id){
    $conn = getConnection();
    $sql="delete from teachers where t_id='$t_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

?>