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
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$funcionario= $_POST ["tipofuncionario"];

$result_trajes= "INSERT INTO trajes VALUES (NULL, '$nome', '$descricao', '$funcionario')";

$resultado_trajes = mysqli_query($conn, $result_trajes);

if(mysqli_insert_id($conn)){
    ?>
  <script>

   alert("traje cadastrado com sucesso!");
   window.location="traje.php";
</script>

    <?php
    
}else{
    ?>
    <script>
    alert("Não foi possivel cadastrar o traje! ");
    window.location="traje.php";
    </script>

    <?php
}

?>
</head>
</html>
