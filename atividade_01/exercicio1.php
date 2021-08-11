<?php 
require_once 'classes/Cesta.php'; 
require_once 'classes/Produto.php'; 
require_once 'classes/Servico.php'; 

$c1 = new Cesta; 
$c2 = new Cesta; 
$c_orlando = new Cesta; 

$c1->addItem( $p1 = new Produto('Chocolate', 10, 5) ); 
$c1->addItem( $p2 = new Produto('Café',     100, 7) ); 
$c1->addItem( $p3 = new Produto('Mostarda',  50, 3) ); 

$c1->addServico( $s1 = new Servico('Colocar quadro', 50));

print_r($c1);
print("<br><br>");
foreach ($c1->getItens() as $item) 
{ 
    print 'Item: ' . $item->getDescricao() . "<br>\n"; 
    print 'Preço: ' . $item->getPreco() . "<br>\n"; 
} 

/*
$total = 0;
foreach ($c1->getItens() as $item) { 
    $total = $total + ($item->getPreco() * $item->getQuantidade()); 
} 
print '<br><br>';
print $total;
*/
print '<br><br>';
print $c1->get_total_a_ser_pago();

