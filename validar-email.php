<?php

  //https://www.alura.com.br/artigos/quando-usar-ou-em-php
  // https://www.php.net/manual/pt_BR/function.strpos.php
  // https://www.php.net/manual/pt_BR/function.strpos.php

    $email = 'joao@gmail.com';
     $email2 = 'joaogmail.com';


// teste 1 fvalidaação de email copm strpos()

  function validaEmail1($email) { 
      $posicao = strpos($email,'@');
  
      if($posicao == 0) { //exibe uma menssagem de erro pra view dizendo que faltou a conta 
       echo 'E-mail invalido!!';
      } else{
        echo 'E-mai Validado!!';
      }
  }
  
  validaEmail1($email);
  
  // teste 2 de validação de email
  
   function validaEmail2($email) { 
      $posicao = strpos($email,'@');
  
      if($posicao == 0) { //exibe uma menssagem de erro dizendo que faltou a conta// } 
          if($posicao == null) { //exibe uma menssagem de erro dizendo que aquele campo é especifico para email// 
           echo 'erro dizendo que aquele campo é especifico para email';
          } 
      }
  }
  
  validaEmail2($email2);
   
    // teste 3 de validação de email  
  function validaEmail3($email) { 
    $posicao = strpos($email,'@') ;

    if($posicao === 0) { //exibe uma menssagem de erro dizendo que faltou a conta// } 
        if($posicao === null) { //exibe uma menssagem de erro dizendo que aquele campo é especifico para email// 
        echo ' erro dizendo que aquele campo é especifico para email teste';
          
        } 
    }
}

validaEmail3($email2);

  
?>