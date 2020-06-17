<?php

 $idFuncao = filter_input(INPUT_GET, 'idFuncao', FILTER_SANITIZE_NUMBER_INT);

 echo ' Quer mesmo excluir esse registro ? ';
 echo "<a href='exFuncao.php?idFuncao=$idFuncao'>Sim</a> | ";
 echo "<a href='funcao.php'>Cancelar</a>";