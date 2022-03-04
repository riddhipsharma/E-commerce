<?php
	$conn = new mysqli("localhost","root","","emall");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>