<?php
include('./autoLoader/autoLoader.php');

$viewSmithEntreprise = new ViewSmithEntreprise();
$allClients = $viewSmithEntreprise->allClients();
$allArticles = $viewSmithEntreprise->allArticles();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/headerStyle.css">
    <title>SMITH BUSINESS | AJOUTER ACHAT </title>
</head>

<?php
include_once("./header.php");
?>


<body class="bdyA">
    <div class="centerC">
        <h1>AJOUTER ACHAT</h1>
        <form action="./homeAchat.php" method="POST" class="formAjoutC">

            <div class="block_1">


                <div class="txt_input">
                    <div>
                        <label for="idClient">Id du Client</label>
                        <select name="idClient" class="input">
                            <?php
                            foreach ($allClients as $client) {
                            ?>
                                <option><?= $client->numero ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>


                <div class="txt_input">
                    <div>
                        <label for="idArticle">Id Article</label><br>
                        <select name="idArticle" class="input">
                            <?php
                            foreach ($allArticles as $article) {
                            ?>
                                <option><?= $article->reference ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="txt_input">
                    <div>
                        <label for="quantite">Quantité</label>
                        <input class="input" type="number" name="quantite" placeholder="quantite" min=1 max=100 required>
                    </div>
                </div>

                <div class="txt_input">
                    <div>
                        <label for="date">Date</label>
                        <input class="input" type="date" name="date" required>
                    </div>
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
</body>

</html>