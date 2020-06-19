<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>
<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$desconto = filter_input(INPUT_POST, 'desconto', FILTER_SANITIZE_EMAIL);
$valorFinal = filter_input(INPUT_POST, 'valorFinal', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$funcionario = $_POST ["funcionario"];
$cliente = $_POST ["cliente"];
$traje = $_POST ["traje"];
$result_alugueis= "INSERT INTO alugueis VALUES (NULL, '$descricao', '$valor', '$desconto', '$valorFinal', '$data',
 '$funcionario', '$cliente', '$traje')";

$resultado_alugueis = mysqli_query($conn, $result_alugueis);

if(mysqli_insert_id($conn)){
    ?>
  <script>

   alert("Aluguel cadastrado com sucesso!");
   window.location="aluguel.php";
</script>

    <?php
    
}else{
    ?>
    <script>
    alert("Não foi possivel cadastrar o aluguel! ");
    window.location="aluguel.php";
    </script>

    <?php
}
?>
</head>
</html>

