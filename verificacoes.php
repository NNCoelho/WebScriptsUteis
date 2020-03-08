<?php
    // Verificar se os campos existem
    if(!isset($_POST['text_usuario']) || !isset($_POST['text_senha'])){
        die('Erro - Não existem os campos necessários.');
    }

    // Verificar se todos os campos estão preenchidos
    if(empty($_POST['text_usuario'])){
        die('Erro - O usuário tem que estar preenchido.');
    }

    if(empty($_POST['text_senha'])){
        die('Erro - A senha tem que estar preenchida.');
    }

    $usuario = $_POST['text_usuario'];
    $senha = $_POST['text_senha'];

    // Verifica se o usuário tem entre 3 e 12 caracteres
    if(strlen($usuario) < 3 || strlen($usuario) > 12){
        die('Erro - O usuário tem que ter entre 3 e 12 caracteres.');
    }

    // Verifica se a senha tem entre 6 e 15 caracteres
    if(strlen($senha) < 6 || strlen($senha) > 15){
        die('Erro - A senha tem que ter entre 6 e 15 caracteres.');
    }

    // Verifica se o usuário e respectiva senha existem
    $admin = 'Nuno';
    $admin_senha = '123456';

    if ($usuario == $admin && $senha == $admin_senha){
        die('Login com Sucesso.');
    } else {
        die('Login Inválido.');
    }
?>