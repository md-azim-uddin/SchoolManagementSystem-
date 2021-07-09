<?php
session_start();
require_once('db.php');
function insertstudents($student){
	$conn = getConnection();
	$sql = "insert into students values('', '{$student['name']}', '{$student['email']}', '{$student['bloodGroup']}', '{$student['phone']}',  '{$student['pass']}', '{$student['gender']}', '{$student['dob']}', '{$student['Class']}','{$student['profilePic']}' )";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function validatestudents($id, $pass){
	$conn = getConnection();
	$sql = "select * from students where s_id='{$id}' and pass='{$pass}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    
    
	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}
function getstudentsbyId($id){
	
	$conn = getConnection();
	$sql = "select * from students where s_id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function getAllstudents(){

	$conn = getConnection();
	$sql = "select * from students";
	$result = mysqli_query($conn, $sql);
	$students = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($students, $row);
	}
	return $students;
}
function updatestudents($students){
    $conn = getConnection();
    $sql = "update students set email='{$students['email']}', phone='{$students['phone']}', pass='{$students['pass']}', Class='{$students['Class']}' where s_id='{$students['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
function deletestudents($s_id){
    $conn = getConnection();
    $sql="delete from students where s_id='$s_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

?>