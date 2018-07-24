<?php
    session_start();
    if(isset($_POST['connectionSubmit'])){
        $login = $_POST['loginInput'];
        $password = $_POST['mdpInput'];
        if ($login == "" && $password == "") {
            $_SESSION['isConnected'] = true;
            $_SESSION['canReturnToAdminHub'] = false;
            header('Location: admin_hub.php');
        }
        else {
            $_SESSION['isConnected'] = false;
            header ('Location: admin_connection.php');
        }
    }elseif(isset($_POST['newArticleSubmit'])){
        $_SESSION['isConnected'] = true;
        $_SESSION['canReturnToAdminHub'] = true;
        header('Location: new_article.php');
    }elseif(isset($_POST['deleteArticleSubmit'])){
        $_SESSION['canReturnToAdminHub'] = true;
        $_SESSION['isConnected'] = true;
        header('Location: delete_article.php');
    }elseif(isset($_POST['returnAdminHubSubmit'])){
        $_SESSION['isConnected'] = true;
        $_SESSION['canReturnToAdminHub'] = false;
        header('Location: admin_hub.php');
    }

?>