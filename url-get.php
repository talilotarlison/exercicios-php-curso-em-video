<?php

  // teste 1 de pegar dados da url
  $url = 'http://exemplo.com/registrar/nomedapessoa';
  $parsed_url = parse_url($url);
  $path = $parsed_url['path']; // "/registrar/nomedapessoa"
  var_dump($path);
  
  // teste de 2 de pegar dados
  //https://www.php.net/manual/pt_BR/function.parse-url.php

  $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
  
  var_dump(parse_url($url));
  var_dump(parse_url($url, PHP_URL_SCHEME));
  var_dump(parse_url($url, PHP_URL_USER));
  var_dump(parse_url($url, PHP_URL_PASS));
  var_dump(parse_url($url, PHP_URL_HOST));
  var_dump(parse_url($url, PHP_URL_PORT));
  var_dump(parse_url($url, PHP_URL_PATH));
  var_dump(parse_url($url, PHP_URL_QUERY));
  var_dump(parse_url($url, PHP_URL_FRAGMENT));

   // teste de 3 de pegar dados
  $url = 'http://username:password@hostname:9090/path?id=214';
  var_dump(parse_url($url, PHP_URL_QUERY));
  


?>
