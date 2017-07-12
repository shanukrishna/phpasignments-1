<?php
$day=1;
echo "The value you are enterd is : $day<br>";
$days=[
1 => 'monday',
2 =>  'tuesday',
];


if(in_array($day, array_keys($days))){
	echo "The day is $days[$day]";

}else {
	echo "thats not valid";}

?>