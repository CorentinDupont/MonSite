<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    
    

    <body>
        <?php 
            include('../../php/site/header.php');
        ?>
        <div class="pageBody" id="adminConnection">
             <h1>Prouve ta sagesse et ton courage jeune héros...</h1>
            <form id="connectionBlock" action="admin_transition.php" method="post">
                <div id="formContent">
                    <article>
                        <label for="loginInput">Login</label>
                        <input type="text" id="loginInput" name="loginInput"/>
                    </article>
                    <article>
                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdpInput" name="mdpInput"/>
                    </article>
                    <button type="submit" name="connectionSubmit">Connexion</button>
                </div> 
            </form>
        </div>
       
        <?php 
        include('../../html/site/footer.html');
        ?>
    </body>
    
    
    
</html>