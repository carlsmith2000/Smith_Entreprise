<?php
    include('./autoLoader/autoLoader.php');

    $articles = new ViewSmithEntreprise();
    
   $allArticles = $articles->allArticles();
    echo "<pre>";
    print_r( $allArticles);
?>