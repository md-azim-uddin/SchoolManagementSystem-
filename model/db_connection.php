<?php
    $host	= "localhost";
	$dbuser	= "root";
	$dbpass	= "";
    $dbname = "project";

	function db_connect(){

		global $dbname, $dbuser, $dbpass, $host;

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


?>