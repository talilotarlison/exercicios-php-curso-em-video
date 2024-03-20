
<?php

//https://help.mikrotik.com/docs/display/ROS/Command+Line+Interface
 
//https://www.kaspersky.com.br/resource-center/threats/web



  define("URL_PARAMETRO", "/view/");
  
	$router = '/erro';

switch ($router) {
    case '/':
       Rotas::index();
        break;
    case '/contato':
       Rotas::contato();
        break;
      case '/ajuda':
       Rotas::ajuda();
        break;
      case '/erro':
       Rotas::erro();
        break;
}
	
	
class Rotas{
  	
	public function index(){
	   echo URL_PARAMETRO."home.php";
	}

	public function contato(){
	   echo "minha contato";
	}
  
	public function ajuda(){
	   echo "minha ajuda";
	}

	public function erro(){
	   echo "minha erro";
	}
  
}


?>