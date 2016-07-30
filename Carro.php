<?php

/**
 * Esssa classe generica para a fabricaçao de um carro.
 * @package GM.
 * @autor Rodrigo.
 * @since 30/07/2017
 */

class Carro
{  
  // constante nao tem $ de variavel.
   const modelo = "Vectra";

   public  $rodas;
   public  $cor;
   public  $portas;
   private $ano;
   private $motor;  
   private $combustivel = 0;
   
   /**
    * Construtor do Objeto.
    * @param type $cor
    * @param type $rodas
    * @param type $ano
    * 
    */
   public function __construct( $motor)
   {
     $this->motor = $motor;
   }
   
   /**
    * Abastece o carro com a quantidade informada.
    * @param type $litros
    * @return type
    */
   public function abastecer($litros)
   {
      $this->combustivel += $litros;
      return $this->combustivel;
   }

   public function ligar()
   {
     
   }
   
   public function desligar()
   {
  
   }
   
   private function andar()
   {
   
   }
   
   public function acelerar()
   {
   }
   
   public function frear()
   {
   }
   
   public function jsonSerializable()
      {
       return $this->combustivel;
      } 
   
   
}