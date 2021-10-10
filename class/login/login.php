<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Login | ECS</title>
</head>

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