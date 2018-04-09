<?php

  interface Veiculo
  {
    #
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

  }

/**
 *
 */
Abstract class Automovel implements Veiculo
{

  public function acelerar($velocidade)
  {
      echo 'O veículo acelerou até: '. $velocidade.' Km/h';
  }

  public function frenar($velocidade)
  {
      echo 'O veículo frenar até: '. $velocidade.' Km/h';
  }

  public function trocarMarcha($marcha)
  {
      echo 'O veículo engatou a marcha '. $marcha;
  }
}

class DelRey extends Automovel
{

  public function empurrar()
  {
    # code...
  }
}

$carro = new DelRey();

$carro->acelerar(200);
?>
