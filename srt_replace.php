<?php
$pass = array('%name%', '%last_name%', '%job%', '%company%' );
$value = array('Jack', 'Enfield', 'Software Engineer', 'Microsoft');
echo str_replace($pass, $value, "Employee name is %name% %last_name%, he is a %job% at %company%.");
?>