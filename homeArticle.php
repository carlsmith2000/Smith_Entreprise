<?php
include('./autoLoader/autoLoader.php');
include_once("./header.php");



$viewSmithEntreprise = new ViewSmithEntreprise();

$controleurSmithEntreprise = new ControleurSmithEntreprise();
if (isset($_POST['valider'])) {

    $controleurSmithEntreprise->insertIntoArticles(
        $_POST['nom'],
        $_POST['description'],
        $_POST['prix'],
        $_POST['qte']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GESTION | ARTICLE</title>
</head>

<body class="bdyc">
    <?php

    $allArticles = $viewSmithEntreprise->allArticles();
    $allClients = $viewSmithEntreprise->allClients();
    $allAchats = $viewSmithEntreprise->allAchats();

    ?>
    <div>

        <p class="gestionA">
            GESTION ARTICLE
        </p>
        <table border="1">

            <thead>
                <tr>
                    <th>Ref Article</th>
                    <th>Nom Article</th>
                    <th>Description</th>
                    <th>Qte Restante</th>
                    <th>Prix Article</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($allArticles as $article) {
                ?>
                    <tr class="color">
                        <td>
                            <?= $article->reference ?>
                        </td>

                        <td>
                            <?= $article->nom ?>
                        </td>

                        <td>
                            <?= $article->description ?>
                        </td>

                        <td>
                            <?= $article->qteRestante ?>
                        </td>

                        <td>
                            <?= $article->prix ?><small> HTG</small>
                        </td>

                        <td>
                            <form action="./ModifierArticle.php" method="POST">
                                <input type="hidden" value="<?= $article->reference ?> " name="referenceArticle">
                                <input class="btAct" type="submit" value="Modifier" name="action">
                                <input class="btAct1" type="submit" value="Supprimer" name="action">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    <?php

    ?>
    <center>
        <div class="addClient">
            <div>
                <a class="a" href="./AjouterArticle.php">Add Article</a>
            </div>
        </div>
    </center>

</body>


</html>