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
    <title>SMITH BUSINESS | AJOUTER ARTICLE </title>
</head>

<?php
include_once("./header.php");
?>

<body class="bdyA">
    <div class="centerC">
        <h1>AJOUTER ARTICLE</h1>
        <form action="./homeArticle.php" method="POST" class="formAjoutC">

            <div class="block_1">

                <div class="txt_input">
                    <input class="input" type="text" name="nom" placeholder="Entre Le 	nom de L'article" required>
                </div>

                <div class="txt_input">
                    <input class="input" type="text" name="description" placeholder="Entre La description de L'article">
                </div>

                <div class="txt_input">
                    <input class="input" type="number" name="prix" placeholder="Entre Le prix de L'article" required>
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