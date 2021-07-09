<?php
	
require_once('dbstudent.php');

function validateuser($id, $password){
	$conn = getConnection();
	$sql = "select * from studentslist where id='{$id}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertuser($user){
	$conn = getConnection();
	$sql = "insert into studentslist values('{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['bloodGroup']}', '{$user['phone']}', '{$user['address']}', '{$user['password']}', '{$user['gender']}', '{$user['dateOfBirth']}', '{$user['picture']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getuserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from studentslist where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAlluser(){

	$conn = getConnection();
	$sql = "select * from studentslist";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function updateuser($user){
	$conn = getConnection();
	$sql = "update studentslist set name='{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['bloodGroup']}', '{$user['phone']}', '{$user['address']}', '{$user['password']}', '{$user['gender']}', '{$user['dateOfBirth']}', '{$user['picture']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteuser($id){
	$conn = getConnection();
	$sql = "delete from studentslist where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getuserByName($username){
	$conn = getConnection();
	$sql = "select * from studentslist where name='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>