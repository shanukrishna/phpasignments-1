<?php
$student = array(['ID' =>1 ,'Name'=>'Arun','Marks'=>98],['ID'=>2,'Name'=>'Ajay','Marks'=>89],['ID'=>3,'Name'=>'Arjun','Marks'=>78],['ID'=>4,'Name'=>'Amritha','Marks'=>92],['ID'=>5,'Name'=>'Akhila','Marks'=>100]);

echo "<table border=1>";
echo "<tr>";
echo "<td>";
echo "ID";
echo "</td>";
echo "<td>";
echo "Name";
echo "</td>";
echo "<td>";
echo "Marks";
echo "</td>";
foreach($student as $key=>$value)
{
	echo "<tr>";
	echo "<td>";
	echo $value['ID'];
	echo "</td>";
	echo "<td>";
	echo $value['Name'];
	echo "</td>";
	echo "<td>";
	echo $value['Marks'];
	echo "</td>";
	echo "</tr>";
	

}
echo "</table>";
?>