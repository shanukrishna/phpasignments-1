<?php

$email="info@baabtra.com";
$password="321";

if($email=="info@baabtra.com" && $password=="321")
{
	echo "login successful";
}
else if($email=="info@baabtra.com" && $password!="321")
{
	echo "invalid password";
}
else
{
	echo "invalid username and password";
}
?>