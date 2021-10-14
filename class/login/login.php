<?php
include_once('../../autoLoader/autoLoader.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Login | ECS</title>
</head>

<?php
    if(isset($_POST['connect'])){
        // $connectToBD = new ConnectToBD($_POST['users'], $_POST['password']);
        if($connectToBD == false){
           session_start();
           $_SESSION['erroMsg'] = 'user Name or Password not correct';
           header('location : ./login.php');
           exit();
        }else{
            session_start();
            $_SESSION['users'] = (object)[
                'userName' => $_POST['users'],
                'password' => $_POST['password']
            ];
            header('location : ./homeArticle.php');
        }
    }

    if(isset($_SESSION['erroMsg'])){
        echo $_SESSION['erroMsg'];
    }
?>

<body class = "bodyLogin">
    <div class="center">
        <div class="borderB"><img src="../../assets/IMG/userOk.png" alt=""></div>
        <h1>Sign in</h1>
        <form action="login.php" method="POST" class="form">

            <div class="txt_input">
                <input class="inputUsers" type="text" name="users" placeholder="users Name">
            </div>

            <div class="txt_input">
                <input class="inputPassword" type="password" name="password" placeholder="Password">
            </div>

            <div class="allBtn">
                <input class="btn" type="submit" name="connect" value="Login">
                <input class="btn" type="reset" name="reset" value="Reset">
            </div>

            <div class="link_create_account">
                <a class="link_create" href="#">creer un Compte &rarr;</a>
            </div>
        </form>

    </div>

</body>

</html>