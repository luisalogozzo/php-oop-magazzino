<?php
class Indumento {
  protected $marca;
  protected $taglia;
  protected $colore;
  protected $materiale;
  protected $provenienza;
  protected $id;

  function __construct($id)
  {
    $this->id = $id;
  }
}
$maglietta = new Indumento('354325');

var_dump($maglietta);


 ?>
