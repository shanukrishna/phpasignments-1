<?php
$mark="60";
echo "The mark you have entered is : $mark <br>";
if($mark>="80" && $mark<="100")
{
	echo "the student has A grade";
}
if($mark>="60" && $mark<="79")
{
	echo "The student has got B grade";
}
if($mark>="40" && $mark<="59")
{
	echo "the student has got C grade";
}
if($mark>="30" && $mark<="49")
{
	echo "the student has got D grade ";
}
if($mark>="10" && $mark<="29")
{
	echo "the student has got E grade";
}

?>