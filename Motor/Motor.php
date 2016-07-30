<?php


/**
 * Motor generico para ser usado em nossa fabrica
 *
 * @author aluno
 */
abstract class Motor
{
  const  TIPO_COMBUSTIVEL = "Gasolina";
  const  TAMANHO          = 1.0;
  
  protected $aceleracao     = 0;
  private $ligado         = false;
  
  public $parafuseta;
  
  
  /**
   * Liga ou desliga o motor
   * @param type bool $ligar
   */
  public function ligar($ligar)
  {
      $this->ligado = $ligar;
     
  }
  
  /**
   * Potencia acelerar motor com uma potencia entre 0 e 100.
   * @param int $potencia
   */
  public function acelerar($potencia)
  {
       $this->aceleracao = $potencia;
  }
          
  
}
