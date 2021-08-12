<?php 
class Professor { 
	public $nome; 
	private $titulacao; 
	 
	public function __construct($nome, $titulacao) 
	{ 
        $this->nome = $nome; 
        $this->titulacao = $titulacao;  
	} 
	 
	public function getNome() 
	{ 
	    return $this->nome; 
	} 
}