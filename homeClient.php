<?php
include('./autoLoader/autoLoader.php');
include_once("./header.php");

$viewArticles = new ViewSmithEntreprise();

$controlerArticles = new ControleurSmithEntreprise();
if (isset($_POST['valider'])) {

    $controlerArticles->insertIntoClients(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['adresse'],
        $_POST['CodePostal'],
        $_POST['Ville'],
        $_POST['Pays'],
        $_POST['telephone']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>GESTION | CLIENTS</title>
</head>

<body class="bdyc">
    <?php

    $allArticles = $viewArticles->allArticles();
    $allClients = $viewArticles->allClients();
    $allAchats = $viewArticles->allAchats();

    ?>
    <div>
        <p class="gestionA">
            GESTION ACHAT
        </p>

        <table border="1">

            <thead>
                <tr>
                    <th>No Client</th>
                    <th>Nom Client</th>
                    <th>Preom Client</th>
                    <th>Adresse Client</th>
                    <th>Code Postal</th>
                    <th>Ville Client</th>
                    <th>Pays Client</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($allClients as $client) {
                ?>
                    <tr class="color">
                        <td>
                            <?= $client->numero ?>
                        </td>

                        <td>
                            <?= $client->nom ?>
                        </td>

                        <td>
                            <?= $client->prenom ?>
                        </td>

                        <td>
                            <?= $client->adresse ?>
                        </td>

                        <td>
                            <?= $client->codepostal ?>
                        </td>

                        <td>
                            <?= $client->ville ?>
                        </td>

                        <td>
                            <?= $client->pays ?>
                        </td>
                        <td>
                            <form action="./ModifierClient.php" method="POST">
                                <input type="hidden" value="<?= $client->numero ?> " name="idClient">
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
                <a class="a" href="./AjouterClient.php">Add Client</a>
            </div>
        </div>
    </center>
</body>


</html>