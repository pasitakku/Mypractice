<?php


	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($_POST['username'])&& !empty($_POST['password'])){
		$username= "bobby";
		$password= "1234";
		echo "success";
	}else{
		echo "incorrect";
	}
		
?>
	
	

	
	
