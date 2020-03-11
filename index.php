<?php
  require 'classes/dipendente.php';

  $dipendente1 = new Dipendente ('JDUOE1255', 'Andrea', 'De Marco', 'DMRNDR91T21L109E', '705B');
  $dipendente1->pagaOraria = 24;
  $dipendente1->calcoloFerie(120, 76);
  $dipendente1->stipendioMensile(180);
  var_dump($dipendente1);
 ?>
