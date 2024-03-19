<?php
//https://www.php.net/manual/pt_BR/function.strstr.php

$output_string = 'Employee name is $name $last_name, he is a $job at $company.';

$values = array( '$name' => 'Jack', '$last_name' => 'Enfield', '$job' => 'Software Engineer', '$company' => 'Microsoft');

echo strtr($output_string, $values);
?>