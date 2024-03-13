<?php 

  $url = "https://testurl.com/test/1234?email=abc@test.com&name=sarah";
  $components = parse_url($url);
  parse_str($components['query'], $results);
  print_r($results); 
  echo $results['name'];
  
?> 
