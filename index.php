<?php
  require_once 'classes/dipendente.php';
  require_once 'classes/ruolo.php';

  $dipendente1 = new Dipendente('JDUOE1255', 'Andrea', 'De Marco', 'DMRNDR91T21L109E');
  $dipendente1->pagaOraria = 24;
  $dipendente1->calcoloFerie(120, 76);
  $dipendente1->stipendioMensile(180);
  $dipendente1 = new Ruolo('JDUOE1255', 'Andrea', 'De Marco', 'DMRNDR91T21L109E', '705B', 'Birrificio', 'Livello4');
  var_dump($dipendente1);

 ?>
