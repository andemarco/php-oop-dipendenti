<?php
  /**
   *
   */
  trait Ferie
  {
    public $ferieResidue;

    function calcoloFerie($_ferieMaturate, $_ferieGodute)
    {
      $_ferieResidue = $_ferieMaturate - $_ferieGodute;
      return $this->ferieResidue = $_ferieResidue;
    }
  }



 ?>
