<?php
require_once 'classes/dipendente.php';
class Ruolo extends Dipendente
  {
    public $ruoloId;
    public $ruolo;
    public $settore;
    public $livelloPrivilegi;

    public function __construct($_dipendenteId, $_nome, $_cognome, $_cf, $_ruoloId, $_settore, $_livelloPrivilegi)
    {
      parent:: __construct($_dipendenteId, $_nome, $_cognome, $_cf);
      if (empty($_ruoloId)){
        throw new Exception ('Non hai inserito ID ruolo');
      } elseif (empty($_settore)) {
        throw new Exception ('Non hai inserito il settore di competenza');
      } elseif (empty($_livelloPrivilegi)) {
        throw new Exception ('Non hai inserito il livello dei privilegi');
      } else {
          $this->ruoloId = $_ruoloId;
          $this->settore = $_settore;
          $this->livelloPrivilegi = $_livelloPrivilegi;
      }
    }
  }

 ?>
