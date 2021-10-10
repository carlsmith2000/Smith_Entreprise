<?php
include('./autoLoader/autoLoader.php');

$controlerArticles = new ControleurSmithEntreprise();

$controlerArticles = new ControleurSmithEntreprise();

if (isset($_POST['valider'])) {

    $controlerArticles->updateClients(
        $_POST['numero'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['adresse'],
        $_POST['CodePostal'],
        $_POST['Ville'],
        $_POST['Pays'],
        $_POST['telephone']
    );
    header('location: ./homeClient.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <title>SMITH BUSINESS | MODIFIER CLIENT</title>
</head>

<?php
include_once("./header.php");
?>

<body class="bdyA">

    <?php
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'Supprimer') {
            $controlerArticles->deleteClients($_POST['idClient']);
            header('location: ./homeClient.php');
        } 
        
        
        
        if ($_POST['action'] == 'Modifier') {
            $client = $controlerArticles->searchClient($_POST['idClient']);
    ?>
            <div class="centerC">
                <h1>Modifier CLIENTS</h1>
                <form action="ModifierClient.php" method="POST" class="formAjoutC">

                    <div class="block_1">
                        <div class="txt_input">
                            <input class="input" value=<?= $client->numero ?> readonly type="number" name="numero" placeholder="Entre Le Nom du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->nom ?> type="text" name="nom" placeholder="Entre Le Nom du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->prenom ?> type="text" name="prenom" placeholder="Entre Le Prenom du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->adresse ?> type="text" name="adresse" placeholder="Entre L'adresse du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->codepostal ?> type="text" name="CodePostal" placeholder="Entre Le Code Postal du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->ville ?> type="text" name="Ville" placeholder="Entre La Ville du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->telephone ?> type="text" name="telephone" placeholder="Entre Le no telephone du Client" required>
                        </div>

                        <div class="txt_input">
                            <input class="input" value=<?= $client->pays ?> type="text" name="Pays" placeholder="Entre Le Pays du Client" required>
                        </div>

                    </div>

                    <div class="btns">
                        <div>
                            <input class="btn" type="submit" value="valider" name="valider">
                            <input class="btn" type="reset" value="Effacer" name="Effacer">
                        </div>
                    </div>
                </form>
            </div>
    <?php
        }
    }
    ?>


</body>

</html>