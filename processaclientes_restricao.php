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
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$funcionario = $_POST ["funcionario"];

$result_clientes= "INSERT INTO clientes VALUES (NULL, '$nome', '$cep', '$endereco', '$telefone',  '$dataNascimento',
 '$cpf','$email','$funcionario')";

$resultado_clientes = mysqli_query($conn, $result_clientes);

if(mysqli_insert_id($conn)){
    ?>
  <script>

   alert("Cliente cadastrado com sucesso!");
   window.location="cliente_tela_funcionario.php";
</script>

    <?php
    
}else{
    ?>
    <script>
    alert("Não foi possivel cadastrar o cliente! ");
    window.location="cliente_tela_funcionario.php";
    </script>

    <?php
}
?>
</head>
</html>
