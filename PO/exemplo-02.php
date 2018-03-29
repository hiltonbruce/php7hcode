<?php

  class Carro {

    private $modelo; //Atributo
    private $motor;
    private $ano;

    public function getModelo(){//M�todo

      return $this->modelo;

    }

    public function setModelo($modelo){

      $this->modelo = $modelo;

    }

    public function getMotor():float{

      return $this->motor;

    }

    public function setMotor($motor){

      $this->motor = $motor;

    }

    public function getAno():int{

          return $this->ano;

        }

    public function setAno($ano){

          $this->ano = $ano;

        }

    public function exibir() {

      return array(
          "modelo"=>$this->getModelo(),
          "motor"=>$this->getMotor(),
          "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setAno("2017");
$gol->setMotor("1.6");

  var_dump($gol->exibir());

?>
