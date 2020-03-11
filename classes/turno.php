<?php
require_once 'dipendente.php';

class Turno extends Dipendente
  {
    public $turno;

    public function setTurno($_turno)
    {
      if (empty($_turno)){
        throw new Exception ('Non hai inserito il turno');
      } else {
          $this->turno = $_turno;
      }
    }
    public function getTurno() {
      return $this->turno ;
    }
  }

 ?>
