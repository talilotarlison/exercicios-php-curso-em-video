<?php
// class Cliente em php
class Cliente
{
    public int $id;
    public ?string $name;
    public $peso;
    public $altura;

    public function __construct(int $id, ?string $name, $peso, $altura)
    {
        $this->id = $id;
        $this->name = $name;
        $this->peso = $peso;
        $this->altura = $altura;
    }
  public function hello(){
      return 'Bem-Vindo, '. $this->name . '!';
    }
  public function imc(){
    return ($this->peso / ($this->altura*$this->altura));
  }  
}

//instancia da class cliente e criação do objeto $user

$user = new Cliente(01, 'Talilo', 85, 1.7);

// Metodo Hello
print_r($user->hello() .PHP_EOL);

// var_dump($user->id);
// var_dump($user->name);

// metodo calcula imc
print_r('Seu imc é ' . round($user->imc(),2).'.');


// quebra linha usando -> pode usar "\n" (entre aspas duplas) ou a constante PHP_EOL.
echo "\n";

$dados =  round($user->imc(),2) ;

//função calcular imc do objeto 

function verificaIMC($user, $dadosimc){
  if($dadosimc < 18.5){
    echo $user->name . ', você esta abaixo do peso!';
  }else if($dadosimc >= 18.5 && $dadosimc < 25 ){
    echo $user->name . ', você esta com peso normal!';
  }else if($dadosimc >= 25 && $dadosimc < 30 ){
    echo $user->name . ', você esta com peso normal!';
  }else if($dadosimc >= 30 && $dadosimc < 40 ){
    echo $user->name .', você esta com peso normal!';
  }else{
    echo $user->name .', você esta obeso!';
  }
}

// chamda da função para status imc
verificaIMC( $user, $dados);


?>
