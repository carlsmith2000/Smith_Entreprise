<?php
    include('./autoLoader/autoLoader.php');

    $viewArticles = new ViewSmithEntreprise();
    $controlerArticles = new ControleurSmithEntreprise();
    
   $allArticles = $viewArticles->allArticles();
   
    echo "<pre>";
    print_r( $allArticles);

    $controlerArticles->updateArticles(43, 'Gateau', 'Gateau a base de chocolat', 1500);
    print_r( $allArticles);
?>