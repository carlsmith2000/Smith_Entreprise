<?php
include('./autoLoader/autoLoader.php');

$controleurSmithEntreprise = new ControleurSmithEntreprise();
$viewSmithEntreprise = new ViewSmithEntreprise();
if (isset($_POST['valider'])) {
    
    $controleurSmithEntreprise->updateArticles(
        $_POST['reference'],
        $_POST['nom'],
        $_POST['description'],
        $_POST['prix'],
    );

    header('location: ./homeArticle.php');
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
            $controleurSmithEntreprise->deleteArticles($_POST['referenceArticle']);
            header('location: ./homeArticle.php');
        }



        if ($_POST['action'] == 'Modifier') {
            $article = $viewSmithEntreprise->searchArticles($_POST['referenceArticle']);
    ?>
            <div class="centerC">
                <h1>Modifier ARTICLES</h1>
                <form action="ModifierArticle.php" method="POST" class="formAjoutC">

                    <div class="block_1">

                        <div class="txt_input">
                            <div>
                                <label for="reference">Reference Article</label>
                                <input class="input" readonly type="text" name="reference" value=<?= $article->reference ?>  required>
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="nom">Nom Article</label>
                                <input class="input" type="text" name="nom" value=<?= $article->nom ?> placeholder="Entre Le nom de L'article" required>
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="description">Description Article</label>
                                <input class="input" type="text" name="description" value=<?= $article->description ?> placeholder="Entre La Description">
                            </div>
                        </div>

                        <div class="txt_input">
                            <div>
                                <label for="prix">Prix Article</label>
                                <input class="input" type="number" name="prix" value=<?= $article->prix ?> placeholder="Entre Le prix L'article" required >
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