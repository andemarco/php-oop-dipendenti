<?php
  require_once __DIR__ . "/../traits/traitferie.php";
  class Dipendente
  {
    public $dipendenteId;
    public $nome;
    public $cognome;
    public $cf;
    public $ruoloId;
    public $turno;
    public $residenza;
    public $pagaOraria;

    use Ferie;

    public function __construct($_dipendenteId, $_nome, $_cognome, $_cf)
    {
      if (empty($_dipendenteId)){
        throw new Exception ('Non hai inserito ID del dipendente');
      } elseif (empty($_nome)) {
        throw new Exception ('Non hai inserito il nome del dipendente');
      } elseif (empty($_cognome)) {
        throw new Exception ('Non hai inserito il cognome del dipendente');
      } elseif (empty($_cf)) {
        throw new Exception ('Non hai inserito il CF del dipendente');
      } else {
          $this->dipendenteId = $_dipendenteId;
          $this->nome = $_nome;
          $this->cognome = $_cognome;
          $this->cf = $_cf;
          $this->ruoloId = $_ruoloId;
      }
    }
    public function stipendioMensile ($_oreMensili)
    {
      $_stipendioMensile = $this->pagaOraria * $_oreMensili;
      return $this->stipendioMensile = $_stipendioMensile;
    }
  }


 ?>
