<?php 
class Cesta 
{ 
    private $time; 
    private $itens; 
    private $itens_servico;
    public $total_a_ser_pago;
    
    public function __construct( ) 
    { 
        $this->time = date('Y-m-d H:i:s'); 
        $this->itens = array(); 
        $this->itens_servico = array();
        $this->total_a_ser_pago = 0;
    } 
    
    public function addItem( Produto $p ) 
    { 
        $this->itens[] = $p; 
        $this->total_a_ser_pago = $this->total_a_ser_pago + ($p->getPreco() * $p->getQuantidade());
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

    public function get_total_a_ser_pago(){
        return $this->total_a_ser_pago;
    }
} 