<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:55
 */

if (isset($_GET['msg'])) {

    $msg = $_GET['msg'];

    if ($msg == 'empty') {
        echo '<p class="alert alert-warning">ATENÇÃO: Preencha todos os campos do formulário</p>';
    } else if ($msg == 'success') {
        echo '<p class="alert alert-success">Cadastro realizado com sucesso!</p>';
    } else if ($msg == 'error') {
        echo '<p class="alert alert-danger">ATENÇÃO: Não foi possível realizar o cadastro</p>';
    } else if ($msg == "invalid") {
        echo '<p class="alert alert-danger">Login ou senha inválidos. Tente novamente</p>';
    } else if ($msg == "errorLogin") {
        echo '<p class="alert alert-info">Por favor, efetue o login para acessar a área restrita:</p>';
    } else if ($msg == "not-found") {
        echo '<p class="alert alert-warning">Não foi encontrado nenhum item correspondente a sua busca</p>';
    }
}