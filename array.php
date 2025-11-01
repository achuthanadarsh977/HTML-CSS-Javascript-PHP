<html>
<body>
<?php

$people = array("Chad","Michael","Murray");
$people2 = array("Scott","Eastwood");
$age = [20,30,40,50];
$people3 = array_merge($people,$people2);

$ninjaOne = ['shaun' => 'black' , 'paul' => 'mescal'];


$ninjaTwo = ['sam' => 'johnson' , 'peach' => 'yellow'];


$ninjaThree = array_merge($ninjaOne,$ninjaTwo);


print_r($ninjaThree);


print_r($age);


print_r($people3);



echo count($ninjaThree);

?>