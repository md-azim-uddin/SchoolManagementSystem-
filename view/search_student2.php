<?php 
	include('teacher_header.php');
?>

<head>
	<title>Search Student</title>
	<script type="text/javascript" src="../controller/search.js"></script>
</head>
<body>
	<h1 id='myid'>Search Student</h1>
	<form>
		<input type="text" name="name" id="name" value="" onkeyup="live_search()" />
	</form>
	<br>
	<br>
	<div id='output'></div>
</body>
