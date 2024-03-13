<?php
# https://pt.stackoverflow.com/questions/114824/como-e-para-que-usar-mvc-no-php
function build($id, $titulo, $ultimaEdicao, $gratificacao, $criadorId) {
    // validamos nosso modelo
    validate($id, $titulo, $ultimaEdicao, $gratificacao, $criador);

    return [
        'id' => $id,
        'titulo' => $id,
        'ultimaEdicao' => $ultimaEdicao,
        'gratificacao' => $gratificacao,
        'criador' => $criadorId
    ];
}


function validate($id, $titulo, $ultimaEdicao, $gratificacao, $criadorId) {
    if (!is_int($id) || $id < 0) {
        throw new Exception('Id inválida');
    }
    else if (mb_strlen($titulo) < 5) {
        throw new Exception('Títulos de questões devem ter no minímo 5 caracters.');
    }
    else if ($ultimaEdicao && !ehUmaDatetimeValida($ultimaEdicao)) {
        throw new Exception('Data de última edição inválida');
    }
    else if ($gratificacao && $gratificacao < 50 || $gratificacao > 200) {
        throw new Exception('Gratificações devem ser entre 50 e 200 pontos.');
    }
    else if (!is_int($criadorId) || $criadorId <= 0) {
        throw new Exception('Usuário inválido.');
    }
}

?>
