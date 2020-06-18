<?php

 $idFornecedores = filter_input(INPUT_GET, 'idFornecedores', FILTER_SANITIZE_NUMBER_INT);

 echo ' Quer mesmo excluir esse registro ? ';
 echo "<a href='exFornecedor.php?idFornecedores=$idFornecedores'>Sim</a> | ";
 echo "<a href='fornecedor.php'>Cancelar</a>";