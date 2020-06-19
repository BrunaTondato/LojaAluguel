<?php

 $idAlugueis = filter_input(INPUT_GET, 'idAlugueis', FILTER_SANITIZE_NUMBER_INT);

 echo ' Quer mesmo excluir esse registro ? ';
 echo "<a href='exAluguel.php?idAlugueis=$idAlugueis'>Sim</a> | ";
 echo "<a href='aluguel.php'>Cancelar</a>";