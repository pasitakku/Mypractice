<?php
 /** setting option
 */
	$options = [
		"cost" => 12,
		"salt" => uniqid()."12345678910",
	];
	define("PASSWORD","hello");
/** password

echo PASSWORD hash

*/
	$hash = password_hash(PASSWORD,PASSWORD_DEFAULT,$options);
 	echo $hash;


 ?>