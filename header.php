<?php
    session_start();
    if (isset($_SESSION['users'])) {
        if ($_SESSION['users']->password == 'vendeur') {
            $titre = 'Vendeur';
        } else {
            $titre = 'Comptable';
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/headerStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Document</title>
    </head>

    <body>
        <div class="sidebar">
            <header>SMITH BUSINESS </header>
            <ul>
                <li><a href="./homeClient.php">Gestion Client</a></li>
                <li><a href="./homeArticle.php">Gestion Article</a></li>
                <li><a href="./homeAchat.php">Gestion Achat</a></li>
                <div>
                    <p><?= $titre ?> <?= $_SESSION['users']->userName ?></p>
                    <form action="./class/login/logout.php" method="post">
                        <li><input type="submit" name="deconection" value="Deconnection"></li>
                    </form>
                </div>
            </ul>
        </div>

    </body>

    </html>
<?php

?>