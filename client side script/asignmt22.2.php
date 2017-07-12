<?php
$users=array(['id'=>1,'name'=>'shanav','email'=>'shanav@gmail.com','phone'=>823456],
	['id'=>2,'name'=>'amy','email'=>'amy12@gmail.com','phone'=>852364],
	['id'=>3,'name'=>'anu','email'=>'anumohn@gmail.com','phone'=>784521],
	['id'=>4,'name'=>'navni','email'=>'navni@gmail.com','phone'=>756987],
	['id'=>5,'name'=>'rinshi','email'=>'rinshi@gmail.com','phone'=>957467],
	['id'=>6,'name'=>'amaan','email'=>'amaan@gmail.com','phone'=>754861],
	['id'=>7,'name'=>'avni','email'=>'avni@gmail.com','phone'=>9745069],
	['id'=>8,'name'=>'shifa','email'=>'shifa@gmail.com','phone'=>9004507],
	['id'=>9,'name'=>'ayana','email'=>'ayana@gmail.com','phone'=>9544560],
	['id'=>10,'name'=>'neil','email'=>'neil@gmail.com','phone'=>9895119]);

$toSkip=6;

foreach($users as $key=>$value)
{
	if($value['id']===$toSkip)
	{
		
		continue;
	}
	var_dump($value);
}

?>