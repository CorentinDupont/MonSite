<?php
    $login = $_POST['loginInput'];
    $password = $_POST['mdpInput'];
    if ($login == "" && $password == "") {
        header('Location: admin_transition.php');
    }
    else {
        header ('Location: admin_connection.php');
    }
?>           