<?php

    require_once 'config.php';

//    CARREGA UM USUÁRIO
//    $leo = new Usuario();
//    $leo->loadById(1);
//    echo $leo;

//    CARREGA UMA LISTA DE USUÁRIOS
//    $lista = Usuario::getList();
//    echo json_encode($lista);

    $search = Usuario::search('tes');
    echo json_encode($search);