<?php
    $data = $_POST['data'];

    // todos os dados estão na variavel dados
    $dados = json_decode($data, true);

    echo('Cor: '.$dados[0]['cor']);
    echo('Nome: '.$dados[0]['nome']);
    echo('Tipo: '.$dados[0]['tipo']);
    echo('Tamanho: '.$dados[0]['tamanho']);

    // dados aqui
    var_dump($dados);
?>