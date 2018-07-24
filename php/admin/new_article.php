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
        <div id="newArticle">
            <!-- form for all informations -->
            <form action="#" method="post" enctype="multipart/form-data">
                <section id="titleBlock">
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
                    <h1>Rédaction d'un article</h1>
                </section>
                <section id="informationsForm">
                    <div class="itemForm">
                        <label for="articleTitle">Titre</label>
                        <input type="text" name="articleTitle"/>
                    </div>
                    <article class="doubleItemsLine"> 
                        <div class="itemForm">
                            <label for="articleAuthor">Auteur</label>
                            <input type="text" name="articleAuthor"/>
                        </div>
                        <div class="itemForm">
                            <label for="articleDate">Date</label>
                            <input type="date" name="articleDate"/>
                        </div>
                    </article>
                    <article id="keywordsLine">
                        <label>Mot(s)-clé(s)</label>
                        <div class="keywordComboBox" id="1">
                            <label>
                                <span class="custom-dropdown custom-dropdown--white">
                                    <select class="custom-dropdown__select custom-dropdown__select--white">
                                        <option>Musique</option>
                                        <option>Univers Asiatique</option>
                                        <option>Informatique</option>
                                        <option>Jeux Vidéo</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <div class="keywordComboBox" id="2">
                            <label>
                                <span class="custom-dropdown custom-dropdown--white">
                                    <select class="custom-dropdown__select custom-dropdown__select--white">
                                        <option>Musique</option>
                                        <option>Univers Asiatique</option>
                                        <option>Informatique</option>
                                        <option>Jeux Vidéo</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <button type="button">+</button>
                    </article>
                </section>
                <section id="edition">
                    <article id="sheet">
                        <div class="addTextBlock" id="addTextBlock_1">
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
                            <p>Write your news here</p>
                            <button type="button" class="deleteButton">x</button>
                        </div>
                        <div class="textBlock" id="textBlock_1">
                            <textarea name="textarea1"></textarea>
                            <button type="button" class="deleteButton">x</button>
                        </div>

                        <!--<div class="addImageBlock" id="addImageBlock_2">
                            <label for="image2">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
        <g>
            <path d="M57,6H1C0.448,6,0,6.447,0,7v44c0,0.553,0.448,1,1,1h56c0.552,0,1-0.447,1-1V7C58,6.447,57.552,6,57,6z M56,50H2V8h54V50z"
                />
            <path d="M16,28.138c3.071,0,5.569-2.498,5.569-5.568C21.569,19.498,19.071,17,16,17s-5.569,2.498-5.569,5.569
                C10.431,25.64,12.929,28.138,16,28.138z M16,19c1.968,0,3.569,1.602,3.569,3.569S17.968,26.138,16,26.138s-3.569-1.601-3.569-3.568
                S14.032,19,16,19z"/>
            <path d="M7,46c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l10.302,10.301c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414
                l-4.807-4.807l9.181-10.054l11.261,10.323c0.407,0.373,1.04,0.345,1.413-0.062c0.373-0.407,0.346-1.04-0.062-1.413l-12-11
                c-0.196-0.179-0.457-0.268-0.72-0.262c-0.265,0.012-0.515,0.129-0.694,0.325l-9.794,10.727l-4.743-4.743
                c-0.374-0.373-0.972-0.392-1.368-0.044L6.339,44.249c-0.415,0.365-0.455,0.997-0.09,1.412C6.447,45.886,6.723,46,7,46z"/>
        </g>
        </svg>
                                <p>Add an image</p>
                                <button type="button" class="deleteButton">x</button>
                            </label>
                            <input id="image2" name="image2" type="file"/>

                        </div>
                        <div class="imageBlock" id="imageBlock_2">
                            <img src="../../images/fondArticleTemp2.jpg"/>
                            <button type="button" class="deleteButton">x</button>
                            <label for="editImage2">change</label>
                            <input id="editImage2" name="editImage2" type="file"/>
                        </div>-->
                    </article>

                </section>
                <button id="postArticleSubmit" type="button">Poster l'article</button>
            </form>
            <div id="actionButtonBlock">
                <p id="addTextButton">Ajouter un nouveau paragraphe</p>
                <p id="addImageButton">Ajouter une nouvelle image</p>
            </div>
        </div>
        
        <script src="../../javascript/jquery-3.2.1.min.js"></script>
        <script src="../../javascript/new_article.js"></script>
    </body>
    <?php 
        include('../../html/site/footer.html');
    ?>
</html>