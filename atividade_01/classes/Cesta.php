<?php 
class Cesta 
{ 
    private $time; 
    private $itens; 
    private $itens_servico;
    
    public function __construct( ) 
    { 
        $this->time = date('Y-m-d H:i:s'); 
        $this->itens = array(); 
        $this->itens_servico = array();
    } 
    
    public function addItem( Produto $p ) 
    { 
        $this->itens[] = $p; 
    } 
    
    public function addServico( Servico $s) {
        $this->itens_servico[] = $s;
    }

    public function getItens() 
    { 
        return $this->itens; 
    } 
    
    public function getTime() 
    { 
        return $this->time; 
    } 
} 