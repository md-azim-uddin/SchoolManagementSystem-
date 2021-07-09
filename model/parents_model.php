<?php
//session_start();
require_once('db.php');
function insertparents($parents){
	$conn = getConnection();
	$sql = "insert into parents values('', '{$parents['name']}', '{$parents['email']}', '{$parents['phone']}',  '{$parents['pass']}', '{$parents['dob']}', '{$parents['bloodGroup']}', '{$parents['gender']}',   '{$parents['profilePic']}' )";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function validateparents($id, $pass){
	$conn = getConnection();
	$sql = "select * from parents where p_id='{$id}' and pass='{$pass}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    
    
	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}
function getparentsbyId($id){
	
	$conn = getConnection();
	$sql = "select * from parents where p_id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function getAllparents(){

	$conn = getConnection();
	$sql = "select * from parents";
	$result = mysqli_query($conn, $sql);
	$parents = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($parents, $row);
	}
	return $parents;
}
function updateparents($parents){
    $conn = getConnection();
    $sql = "update parents set email='{$parents['email']}', phone='{$parents['phone']}', pass='{$parents['pass']}'where p_id='{$parents['id']}'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        return true;
    }else{
        return false;
    }
}
function deleteparents($p_id){
    $conn = getConnection();
    $sql="delete from parents where p_id='$p_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }else{
        return false;
    }
}
?>