<?php
require_once('db.php');
function insertexams($ExamData){
	$conn = getConnection();
	$sql = "insert into exams values('', '{$ExamData['ExamDate']}', '{$ExamData['ExamTime']}', '{$ExamData['ExamDescription']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function validateexams($id, $pass){
	$conn = getConnection();
	$sql = "select * from exams where e_id='{$id}''";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
    
    
	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}
function getexamsbyId($id){
	
	$conn = getConnection();
	$sql = "select * from exams where p_id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function getAllexams(){

	$conn = getConnection();
	$sql = "select * from exams";
	$result = mysqli_query($conn, $sql);
	$exams = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($exams, $row);
	}
	return $exams;
}

?>