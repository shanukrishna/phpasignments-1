<?php
function fullname($firstname,$middlename,$lastname,$seperator='_'){
	return "{$firstname}{$seperator}{$middlename}{$seperator}{$lastname}";

}
$fullname=fullname('Baabtra','Mentoring','Partner');
echo $fullname;
?>