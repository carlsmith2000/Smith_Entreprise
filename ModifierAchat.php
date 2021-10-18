<?php
include('./autoLoader/autoLoader.php');

$controleurSmithEntreprise = new ControleurSmithEntreprise();
$viewSmithEntreprise = new ViewSmithEntreprise();
$allAchats = $viewSmithEntreprise->allAchats();
if (isset($_POST['valider'])) {

    $controleurSmithEntreprise->updateAchats(
        $_POST['idAchat'],
        $_POST['idClient'],
        $_POST['idArticle'],
        $_POST['quantite'],
        $_POST['date']
    );

    header('location: ./homeAchat.php');
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
    <title>SMITH BUSINESS | MODIFIER ARTICLE</title>
</head>

<?php
include_once("./header.php");
?>

<body class="bdyA">

    <?php
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'Supprimer') {
            $controleurSmithEntreprise->deleteAchats($_POST['idAchat']);
            header('location: ./homeAchat.php');
        }

        if ($_POST['action'] == 'Modifier') {
            $achat = $viewSmithEntreprise->searchAchats($_POST['idAchat']);
    ?>
            <div class="centerC">
                <h1>Modifier ACHAT</h1>
                <form action="ModifierAchat.php" method="POST" class="formAjoutC">

                    <div class="block_1">

                    <div class="txt_input">
                            <div>
                                <label for="quantite">Id Achat</label>
                                <input class="input" type="number" value="<?=$achat->id_achat?>" name="idAchat" readonly >
                            </div>
                        </div>


                        <div class="txt_input">
                            <div>
                                <label for="idClient">Id Client</label><br>
                                <select name="idClient" class="input">
                                    <?php
                                    foreach ($allAchats as $achats) {
                                    ?>
                                        <option value="<?= $achat->id_client?>" > <?=$achats->id_client?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="idArticle">Id Article</label>
                                <select name="idArticle" class="input">
                                    <?php
                                    foreach ($allAchats as $achats) {
                                    ?>
                                        <option value= <?=$achat->id_article?> > <?= $achats->id_article ?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="quantite">Quantité</label>
                                <input class="input" value= <?=$achat->quantite?> type="number" name="quantite" placeholder="quantite" min=1 max=100 required>
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="date">Date</label>
                                <input value= <?=$achat->date?> class="input" type="date" name="date" required>
                            </div>
                        </div>


                    </div>
                    <div class="btns">
                        <div>
                            <input class="btn" type="submit" value="valider" name="valider">
                            <input class="btn" type="reset" value="Effacer" name="Effacer">
                        </div>
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