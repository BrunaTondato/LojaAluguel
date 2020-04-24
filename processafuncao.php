<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


$result_funcao= "INSERT INTO funcao (nome) VALUES ('$nome')";

$resultado_funcao = mysqli_query($conn, $result_funcao);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = " <p style='color:green;'> Função cadastrada com sucesso! </p>";
    header("Location: funcao.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'> Não foi possivel cadastrar a função! </p>";
    header("Location: funcao.php");
}