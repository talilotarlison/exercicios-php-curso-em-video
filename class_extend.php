// https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Classes/extends

class Saldacao {
  ola(nome){
    return 'Olá, Seja Bem-Vindo: ' + nome + '.';
  }
  
}

var visitante = new Saldacao()

console.log(visitante.ola('Talilo'))
