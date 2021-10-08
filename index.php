<?php
include('./autoLoader/autoLoader.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESC | ADMIN</title>
</head>

<body>
    <?php
        $viewArticles = new ViewSmithEntreprise();
        $controlerArticles = new ControleurSmithEntreprise();

        $allArticles = $viewArticles->allArticles();
        $allClients = $viewArticles->allClients();
        $allAchats = $viewArticles->allAchats();
    ?>

    <table border="1">
        
    </table>

</body>

</html>