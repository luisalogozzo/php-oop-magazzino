<?php require_once 'indumento.php';

/**
 *
 */
class Maglietta extends Indumento
{
protected $collo;
protected $manica;
public $costoRicamo;


public function prezzoRicami ($numeroRicami)
{
return $this->costoRicamo * $numeroRicami;
}


function __construct()
{
  // $this->id = $id;
  // $this->marca = $marca;
}
}

$gucci = new Maglietta();
$gucci->costoRicamo = 10;
$numeroRicami = $gucci->prezzoRicami(3);

var_dump($gucci);
echo $numeroRicami;


?>
