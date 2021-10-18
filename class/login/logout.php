<?php
    if (isset($_POST['deconection'])) {
        unset($_SESSION['users']);
        session_destroy();
        header('location: ./login.php');
    }
?>