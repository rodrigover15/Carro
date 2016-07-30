<?php

/**
 * 
 */
class Motor20 extends Motor
{
    const TAMANHO = 2.0;
    
    private  $rebinboca;
    
    
    public function alterarRebinboca($valor)
    {
        $this->rebinboca = $valor;  
        $this->parafuseta = 'fdfd0';
        $this->aceleracao = 10;
    }
    
    public function acelerar($potencia) 
    {
      
        parent::acelerar($potencia);
    }

}
