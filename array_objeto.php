<?php
  $object = (object) [
    'propertyOne' => 'foo',
    'propertyTwo' => 42,
  ];
  
 var_dump($object);
 echo $object->"propertyOne";
  
?>
