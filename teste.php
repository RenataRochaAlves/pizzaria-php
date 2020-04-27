<?php 
    /**
     * Nessa parte você deve incluir os arquivos
     * pizzas.php e o functions php para realizar
     * os testes das funções desenvolvidas em
     * functions.php
     */

    include("includes/pizzas.php");
    include("includes/functions.php");

    $teste = carregaUsuario();

    echo "<pre>";
    print_r($teste);
    echo "</pre>";

    addUsuario("Isabella Alves", "9 9999-9999", "Rua dos Anjos, 334", "abobora", "img/skdjas.png");
    
?>