<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

$result_fornecedores= "INSERT INTO fornecedores VALUES (NULL, '$nome', '$endereco', '$telefone', '$cnpj',  '$email',
 '$cep')";

$resultado_fornecedores = mysqli_query($conn, $result_fornecedores);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = " <p style='color:green;'> Fornecedor cadastrado com sucesso! </p>";
    header("Location: fornecedor.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'> Não foi possivel cadastrar o forncedor! </p>";
    header("Location: fornecedor.php");
}