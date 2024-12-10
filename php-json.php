<!DOCTYPE html>
<html>
<body>
<main>
	<h1>Lista de Filmes:</h1>
	<ul>
 
  	  <?php
      $arr = '{"nome":"De volta para fulturo",
      			"ano": "1995",
                "discricao":"Filme futurista de ação e comedia para familia!"
      		   }';
 
       $arr2 = array('netflix'=>'www.netflix.com','Amazon'=> 'www.amazon.com','globo play'=>'www.globo.com.br'); 
 
       $filme = json_decode($arr);   
       $plataforma = json_encode($arr2);
       //echo $plataforma;
      // echo $filme;
 
      foreach ($arr2 as $key => $dados) {
        $chave = ucfirst($key);
        echo "<li> $chave : $dados </li>";
      }
 
 
      echo "Fim da lista!!";
 
      ?> 
 
    </ul>
</main>
 
</body>
</html>
