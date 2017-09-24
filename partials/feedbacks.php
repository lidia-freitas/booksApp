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
        echo '<p class="alert alert-warning">
              <i class="glyphicon glyphicon-exclamation-sign"></i> Por favor, preencha todos os campos do formulário
              </p>';
    } else if ($msg == 'success') {
        echo '<p class="alert alert-success">
              <i class="glyphicon glyphicon-ok-sign"></i> Cadastro realizado com sucesso!
              </p>';
    } else if ($msg == 'error') {
        echo '<p class="alert alert-danger">
              <i class="glyphicon glyphicon-remove-sign"></i> Não foi possível realizar o cadastro
              </p>';
    } else if ($msg == "invalid") {
        echo '<p class="alert alert-danger">
              <i class="glyphicon glyphicon-remove-sign"></i> Login ou senha inválidos. Por favor, tente novamente
              </p>';
    } else if ($msg == "errorLogin") {
        echo '<p class="alert alert-info">
              <i class="glyphicon glyphicon-info-sign"></i> Por favor, efetue o login para acessar a área restrita:
              </p>';
    } else if ($msg == "not-found") {
        echo '<p class="alert alert-warning">
              <i class="glyphicon glyphicon-exclamation-sign"></i> Não foi encontrado nenhum item correspondente a sua busca
              </p>';
    } else if ($msg == "wrong-pass") {
        echo '<p class="alert alert-warning">
              <i class="glyphicon glyphicon-exclamation-sign"></i> A senha atual está incorreta
              </p>';
    } else if ($msg == "error-vote") {
        echo '<p class="alert alert-danger">
              <i class="glyphicon glyphicon-exclamation-sign"></i> Não foi possível registrar seu voto no momento. Tente novamente mais tarde.
              </p>';
    } else if ($msg == "success-vote") {
        echo '<p class="alert alert-success">
              <i class="glyphicon glyphicon-exclamation-sign"></i> Voto registrado com sucesso.
              </p>';
    }
}