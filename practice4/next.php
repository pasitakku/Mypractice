<?php


	$username = $_POST['username'];
	$password = $_POST['password'];

/**
	if($_POST['username'] == 'bobby' && $_POST['password'] == '1234'){
		echo "success";
	}else{
		echo "incorrect";
	}
		*/
	 $hash = "$2y$12$5e11ba832810212345678uTlfrphgX/7TSeWLilQcHK2gRzziiy7.";

if (password_verify($password, $hash)){
   echo "success"; // Success!
}
else {
   echo "Incorrect"; // Invalid credentials
}


	?>
	
