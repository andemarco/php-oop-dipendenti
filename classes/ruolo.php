<?php
require_once 'turno.php';

class Ruolo extends Turno
  {
    public $ruolo;

    public function setRole($_ruolo)
    {
      if (empty($_ruolo)){
        throw new Exception ('Non hai inserito il ruolo');
      } else {
          $this->ruolo = $_ruolo;
      }
    }
    public function getRole() {
      return $this->ruolo ;
    }
  }

 ?>
