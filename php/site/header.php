<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>

    <header>
        <a href="../../php/site/in_development.php">Corentin Dupont</a>
        <a href="../../php/site/blog.php" class="headerLink">Blog</a>
        <a href="../../php/site/in_development.php" class="headerLink">A Propos</a>
        <a href="../../php/site/in_development.php" class="headerLink">CV</a>
        <a href="../../php/site/in_development.php" class="headerLink">Contact</a>
        
        <?php 
            session_start();
            if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']==true && isset($_SESSION['canReturnToAdminHub']) && $_SESSION['canReturnToAdminHub']==true){
                echo '
                <form action="../../php/admin/admin_transition.php" method="post">
                    <button id="returnAdminHubLink" type="submit" name="returnAdminHubSubmit">Retour au centre d\'actions</button>
                </form>
                ';
            }
        ?>
        
    </header>
    <script src="../../javascript/jquery-3.2.1.min.js"></script>
    <script src="../../javascript/header.js"></script>
</html>