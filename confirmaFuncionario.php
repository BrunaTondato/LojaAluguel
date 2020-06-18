<?php

 $idFuncionario = filter_input(INPUT_GET, 'idFuncionario', FILTER_SANITIZE_NUMBER_INT);

 echo ' Quer mesmo excluir esse registro ? ';
 echo "<a href='exFuncionario.php?idFuncionario=$idFuncionario'>Sim</a> | ";
 echo "<a href='funcionario.php'>Cancelar</a>";