<?php
$output_string = 'Employee name is $name $last_name, he is a $job at $company.';

$values = array(
    array( '$name' => 'Jack' , '$last_name' => 'Enfield' , '$job' => 'Software Engineer', '$company' => 'Microsoft'),
	array( '$name' => 'Samuel', '$last_name' => 'Stevens', '$job' => 'Software Tester', '$company' => 'Apple'),
	array( '$name' => 'Mike', '$last_name' => 'Geller', '$job' => 'Salesman', '$company' => 'Amazon'),
	array( '$name' => 'John', '$last_name' => 'Clay', '$job' => 'Manager', '$company' => 'Merriot Hotels')
	);

foreach($values as $val){
    echo strtr($output_string, $val);
	echo "<br>";
}
?>