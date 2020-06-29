<?php

 $idClientes = filter_input(INPUT_GET, 'idClientes', FILTER_SANITIZE_NUMBER_INT);

 echo ' Quer mesmo excluir esse registro ? ';
 echo "<a href='exCliente.php?idClientes=$idClientes'>Sim</a> | ";
 echo "<a href='cliente.php'>Cancelar</a>";