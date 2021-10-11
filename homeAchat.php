<?php
include('./autoLoader/autoLoader.php');
include_once("./header.php");

$viewSmithEntreprise = new ViewSmithEntreprise();

$controleurSmithEntreprise = new ControleurSmithEntreprise();
if (isset($_POST['valider'])) {

    $controleurSmithEntreprise->insertIntoAchats(
        $_POST['idClient'],
        $_POST['idArticle'],
        $_POST['quantite'],
        $_POST['date']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GESTION | ACHAT</title>
</head>

<body class="bdyc">
    <?php

    $allArticles = $viewSmithEntreprise->allArticles();
    $allClients = $viewSmithEntreprise->allClients();
    $allAchats = $viewSmithEntreprise->allAchats();

    ?>
    <div>
        <p class="gestionA">
            GESTION ACHAT
        </p>

        <table border="1">

            <thead>
                <tr>
                    <th>Id Achat</th>
                    <th>Id Client</th>
                    <th>Id Article</th>
                    <th>Quantité</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($allAchats as $achat) {
                ?>
                    <tr class="color">
                        <td>
                            <?= $achat->id_achat ?>
                        </td>

                        <td>
                            <?= $achat->id_client ?>
                        </td>

                        <td>
                            <?= $achat->id_article  ?>
                        </td>

                        <td>
                            <?= $achat->quantite ?>
                        </td>

                        <td>
                            <?= $achat->date ?>
                        </td>

                        <td>
                            <form action="./ModifierAchat.php" method="POST">
                                <input type="hidden" value="<?= $achat->id_achat ?> " name="idAchat">
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
                <a class="a" href="./AjouterAchat.php">Add Article</a>
            </div>
        </div>
    </center>

</body>


</html>