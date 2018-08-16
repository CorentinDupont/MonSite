<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bonjour</title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>

    <?php 
        include('../../php/site/header.php');
        // if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected']==false){
        //     echo $_SESSION['isConnected'];
        //     header('Location: admin_connection.php');
        // }
        // $_SESSION['isConnected']=false;
    ?>
    <body>
        <div class="pageBody" id="deleteArticle">
            <section id="titleBlock">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
              <g>
                <g>
                  <path d="M60.197,418.646H27.571c-6.978,0-12.634,5.657-12.634,12.634s5.656,12.634,12.634,12.634h32.627
                  c6.978,0,12.634-5.657,12.634-12.634C72.831,424.304,67.174,418.646,60.197,418.646z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M114.205,467.363c-4.934-4.932-12.933-4.934-17.867,0l-23.07,23.07c-4.934,4.934-4.935,12.933,0,17.868
                  c2.467,2.466,5.7,3.701,8.933,3.701c3.233,0,6.467-1.234,8.933-3.701l23.07-23.07C119.139,480.297,119.14,472.298,114.205,467.363
                  z" />
                </g>
              </g>
              <g>
                <g>
                  <path d="M484.431,424.963H262.965l226.699-226.688c9.851-9.852,9.852-25.881,0.001-35.733L334.522,7.388
                  c-9.853-9.851-25.882-9.851-35.735,0l-247.99,247.99c-14.318,14.318-22.203,33.354-22.203,53.602
                  c0,20.247,7.885,39.284,22.203,53.602l74.701,74.699c8.351,8.351,19.455,12.951,31.266,12.951H484.43
                  c6.978,0,12.634-5.657,12.634-12.634C497.065,430.621,491.409,424.963,484.431,424.963z M156.765,424.963
                  c-5.062,0-9.82-1.972-13.401-5.551l-74.699-74.699c-19.704-19.704-19.704-51.765,0-71.468l40.557-40.557l133.335,133.336
                  c2.467,2.466,5.7,3.7,8.933,3.7s6.467-1.234,8.933-3.7c4.934-4.934,4.935-12.933,0.001-17.868L127.09,214.821L316.655,25.254
                  l155.142,155.155L227.23,424.963H156.765z" />
                </g>
              </g>
            </svg>
            <h1>Suppression d'articles</h1>
        </section>
        <form id="searchBlock" action="#" method="post">
            <label for="searchInput">Titre</label>
            <input type="text" id="searchInput" name="searchInput"/>
            <p>Rechercher</p>
        </form>
        <section id="listArticle">
            <?php 
                include('delete_article_loading.php');
            ?>
        </section>
        <div id="actionButtonBlock">
            <p id="deleteSelectedArticles">Supprimer les éléments sélectionnés (0)</p>
        </div>
        </div>
    
        
        <script src="../../javascript/jquery-3.2.1.min.js"></script>
        <script src="../../javascript/delete_article.js"></script>
    </body>
    <?php 
        include('../../html/site/footer.html');
    ?>
</html>