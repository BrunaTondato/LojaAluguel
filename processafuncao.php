<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>

<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


$result_funcao= "INSERT INTO funcao (nome) VALUES ('$nome')";

$resultado_funcao = mysqli_query($conn, $result_funcao);

if(mysqli_insert_id($conn)){
    ?>
  <script>

   alert("Função cadastrada com sucesso!");
   window.location="funcao.php";
</script>

    <?php
    
}else{
    ?>
    <script>
    alert("Não foi possivel cadastrar a função! ");
    window.location="funcao.php";
    </script>

    <?php
}
?>
</head>
</html>