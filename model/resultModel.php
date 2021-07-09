<?php
	
require_once('dbstudent.php');

function getuserbyId1($id){
	
	$conn = getConnection();
	$sql = "select * from studentresult where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getuserByName1($username){
	$conn = getConnection();
	$sql = "select * from studentresult where name='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>