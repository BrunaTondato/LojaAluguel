<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>
<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$dataAdmissao = filter_input(INPUT_POST, 'dataAdmissao', FILTER_SANITIZE_STRING);
$dataDemissao = filter_input(INPUT_POST, 'dataDemissao', FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_STRING);
$login= filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$funcao = $_POST ["tipofuncao"];

$result_funcionarios= "INSERT INTO funcionarios VALUES (NULL, '$nome', '$telefone', '$email', '$endereco', '$dataNascimento',
 '$cpf', '$rg', '$dataAdmissao', '$dataDemissao', '$salario', '$login', '$senha', '$funcao')";

$resultado_funcionarios = mysqli_query($conn, $result_funcionarios);

if(mysqli_insert_id($conn)){
    ?>
  <script>

   alert("Funcionario cadastrado com sucesso!");
   window.location="funcionario.php";
</script>

    <?php
    
}else{
    ?>
    <script>
    alert("Não foi possivel cadastrar o funcionario! ");
    window.location="funcionario.php";
    </script>

    <?php
}
?>
</head>
</html>

