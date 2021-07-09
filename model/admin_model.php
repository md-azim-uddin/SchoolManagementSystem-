<?php
session_start();
require_once('db.php');
function insertadmin($admin)
{
	$conn = getConnection();
	$sql = "insert into admins values('', '{$admin['name']}', '{$admin['designation']}', '{$admin['email']}', '{$admin['phone']}', '{$admin['address']}', '{$admin['gender']}', '{$admin['pass']}', '{$admin['dob']}', '{$admin['profilePic']}', '{$admin['bloodGroup']}', '{$admin['qualification']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function validateadmin($id, $pass){
	$conn = getConnection();
	$sql = "select * from admins where id='{$id}' and pass='{$pass}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    
    
	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}
function getadminbyId($id){
	
	$conn = getConnection();
	$sql = "select * from admins where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function updateadmins($admins){
    $conn = getConnection();
    $sql = "update admins set name='{$admins['name']}', designation='{$admins['designation']}', email='{$admins['email']}',phone='{$admins['phone']}',address='{$admins['address']}',qualification='{$admins['qualification']}' where id='{$admins['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
function updateadminPassword($admins){
    $conn = getConnection();
    $sql = "update admins set pass='{$admins['pass']}' where id='{$admins['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
function updateProfilePicture($admins){
    $conn = getConnection();
    $sql = "update admins set profilePic='{$admins['profilePic']}' where id='{$admins['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
?>