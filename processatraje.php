<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>

<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");
// var_dump($_POST); exit;
$idTrajes = filter_input(INPUT_POST, 'idTrajes', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$status = ( isset($_POST['status']) ) ? $_POST['status'] : null;
$fornecedor= $_POST ["tipofornecedor"];
$funcionario= $_POST ["tipofuncionario"];


$result_trajes= "INSERT INTO trajes VALUES ('$idTrajes', '$nome', '$descricao','$status', '$funcionario','$fornecedor')";
// var_dump($result_trajes);exit;
$resultado_trajes = mysqli_query($conn, $result_trajes);
// var_dump($resultado_trajes);exit;
if($resultado_trajes){
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
