<?php

//https://www.delftstack.com/howto/php/php-template-strings/#use-php-strstr-to-generate-a-template-string

$template = function ($values) {
    extract($values);
    return "Employee name is $name $last_name, he is a $job at $company.";
};
$values = array( 'name' => 'Jack', 'last_name' => 'Enfield', 'job' => 'Software Engineer', 'company' => 'Microsoft');
//No $ in the values array because extract function will itself detect values for variables.
echo $template($values);
?>