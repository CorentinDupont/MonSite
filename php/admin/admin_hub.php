<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
<?php 
    include('../../php/site/header.php');
    if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected']==false){
        echo $_SESSION['isConnected'];
        header('Location: admin_connection.php');
    }
    $_SESSION['isConnected']=false;
?>


    <body>
        <div class="pageBody" id="adminHub">
            <h1>Bienvenue dans votre espace personnel, Corentin !</h1>
            <section id="allOptions">
                <article class="option" id="article">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="432.544px" height="432.544px" viewBox="0 0 432.544 432.544" style="enable-background:new 0 0 432.544 432.544;"
                     xml:space="preserve">
                <g>
                    <g>
                        <path d="M0,313.775v118.77h118.771l237.541-237.541L237.539,76.232L0,313.775z M103.638,395.999L103.638,395.999l-30.55,0.004
                            v-36.546H36.545v-30.553l25.981-25.981l67.093,67.092L103.638,395.999z M246.683,124.77c4.182,0,6.276,2.095,6.276,6.28
                            c0,1.906-0.664,3.521-1.999,4.856L96.214,290.651c-1.333,1.328-2.952,1.995-4.854,1.995c-4.184,0-6.279-2.098-6.279-6.279
                            c0-1.906,0.666-3.521,1.997-4.856l154.747-154.743C243.154,125.436,244.773,124.77,246.683,124.77z"/>
                        <path d="M421.976,77.654l-67.091-66.806C347.653,3.619,338.992,0,328.903,0c-10.283,0-18.842,3.619-25.693,10.848l-47.394,47.109
                            l118.773,118.77l47.394-47.392c7.042-7.043,10.561-15.608,10.561-25.697C432.54,93.743,429.022,85.08,421.976,77.654z"/>
                    </g>
                </g>

    </svg>
                    <p class="optionName">Article</p>
                    <form class="optionHover" action="admin_transition.php" method="post">
                        <button type="submit" name="newArticleSubmit">Nouvel article</button>
                        <button type="submit" name="deleteArticleSubmit">Supprimer un article</button>
                    </form>
                </article>
            </section>
        </div>
    </body>
    
<?php 
        include('../../html/site/footer.html');
    ?>
</html>
