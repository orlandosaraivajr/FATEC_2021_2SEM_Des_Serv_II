<?php 
try { 
    // instancia objeto PDO, conectando no PostgreSQL 
    $conn = new PDO('pgsql:dbname=livro;user=postgres;password=;host=localhost'); 
    // executa uma instrução SQL de consulta 
    $result = $conn->query("SELECT codigo, nome FROM famosos"); 
    if ($result) {
        // percorre os resultados via fetch() 
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            // exibe os dados na tela, acessando o objeto retornado 
            echo $row->codigo . ' - '. $row->nome . "<br>\n"; 
        } 
    } 
    // fecha a conexão 
    $conn = null; 
} 
catch (PDOException $e) {
    print "Erro!: " . $e->getMessage() . "<br>"; 
}