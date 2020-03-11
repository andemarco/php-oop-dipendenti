<?php
require_once __DIR__ . '/classes/dipendente.php';
require_once __DIR__ . '/classes/ruolo.php';
require_once __DIR__ . '/classes/turno.php';

  $dipendente1 = new Ruolo('JDUOE1255', 'Andrea', 'De Marco', 'DMRNDR91T21L109E');
  $dipendente1->pagaOraria = 24;
  $dipendente1->calcoloFerie(120, 76);
  $dipendente1->stipendioMensile(180);

  try {
    $dipendente1->setRole('BIRRAIO');
  }  catch (Exception $e) {
    echo 'errore' . $e->getMessage();
  }
    $dipendente1->getRole();

  try {
    $dipendente1->setTurno('9 - 18');
  }  catch (Exception $e) {
    echo 'errore' . $e->getMessage();
  }
    $dipendente1->getTurno();

    var_dump($dipendente1);

 ?>
