<?php
include('./autoLoader/autoLoader.php');
?>


<?php
;
$viewArticles = new ViewSmithEntreprise();
$controlerArticles = new ControleurSmithEntreprise();

$allArticles = $viewArticles->allArticles();
$allClients = $viewArticles->allClients();
$allAchats = $viewArticles->allAchats();


?>



</body>