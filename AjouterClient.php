<?php
    include('./autoLoader/autoLoader.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <title>SMITH BUSINESS | AJOUTER CLIENT</title>
</head>

<?php
include_once("./header.php");
?>

<body class="bdyA">
    <div class="centerC">
        <h1>AJOUTER CLIENTS</h1>
        <form action="./homeClient.php" method="POST" class="formAjoutC">

            <div class="block_1">

                <div class="txt_input">
                    <input class="input" type="text" name="nom" placeholder="Entre Le Nom du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="prenom" placeholder="Entre Le Prenom du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="adresse" placeholder="Entre L'adresse du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="CodePostal" placeholder="Entre Le Code Postal du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="Ville" placeholder="Entre La Ville du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="telephone" placeholder="Entre Le no telephone du Client" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="Pays" placeholder="Entre Le Pays du Client" required>
                </div>

            </div>

            <div class="btns">
                <div>
                    <input   class="btn" type="submit" value="valider" name="valider">
                    <input  class="btn" type="reset" value="Effacer" name="Effacer">
                </div>
            </div>
        </form>
    </div>
</body>

</html>