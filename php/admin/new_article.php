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
  <div class="pageBody" id="newArticle">
    <!-- form for all informations -->
    <form action="#" method="post" enctype="multipart/form-data">
      <section id="titleBlock">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 512.004 512.004" style="enable-background:new 0 0 512.004 512.004;" xml:space="preserve">
          <g>
            <g>
              <path d="M475.369,96.37l-59.733-59.733c-3.337-3.336-8.73-3.336-12.066,0L53.702,386.504c-0.785,0.785-1.417,1.724-1.843,2.748
                        l-42.667,102.4c-1.331,3.192-0.606,6.878,1.843,9.318c1.63,1.63,3.814,2.5,6.033,2.5c1.109,0,2.219-0.213,3.285-0.657
                        l102.4-42.667c1.024-0.427,1.963-1.05,2.748-1.843l349.867-349.867C478.705,105.1,478.705,99.707,475.369,96.37z M114.63,445.042
                        l-81.715,34.039l34.048-81.707L409.602,54.736l47.667,47.667L114.63,445.042z" />
            </g>
          </g>
          <g>
            <g>
              <path d="M23.102,488.903c-3.337-3.336-8.73-3.336-12.066,0l-8.533,8.533c-3.336,3.337-3.336,8.73,0,12.066
                        c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5l8.533-8.533C26.438,497.633,26.438,492.24,23.102,488.903z"
              />
            </g>
          </g>
          <g>
            <g>
              <path d="M466.835,156.103L381.502,70.77c-3.337-3.336-8.73-3.336-12.066,0c-3.336,3.337-3.336,8.73,0,12.066l79.3,79.3
                        L326.769,284.103c-3.337,3.337-3.337,8.73,0,12.066c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5l128-128
                        C470.172,164.833,470.172,159.44,466.835,156.103z" />
            </g>
          </g>
          <g>
            <g>

              <rect x="81.066" y="380.164" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -272.4391 187.0749)" width="17.067" height="84.471"
              />
            </g>
          </g>
          <g>
            <g>
              <path d="M509.502,28.103l-25.6-25.6c-3.337-3.336-8.73-3.336-12.066,0l-51.2,51.2c-3.336,3.337-3.337,8.73,0,12.066
                        s8.73,3.337,12.066,0l45.167-45.167l13.534,13.534l-45.167,45.167c-3.337,3.336-3.337,8.73,0,12.066
                        c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5l51.2-51.2C512.838,36.833,512.838,31.44,509.502,28.103z"
              />
            </g>
          </g>
          <g>
            <g>

              <rect x="200.533" y="260.699" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -152.9732 236.5602)" width="17.067" height="84.471"
              />
            </g>
          </g>
        </svg>
        <h1>Rédaction d'un article</h1>
      </section>
      <section id="informationsForm">
        <div class="itemForm">
          <label for="articleTitle">Titre</label>
          <input type="text" name="articleTitle" />
        </div>
        <article class="doubleItemsLine">
          <div class="itemForm">
            <label for="articleAuthor">Auteur</label>
            <input type="text" name="articleAuthor" />
          </div>
          <div class="itemForm">
            <label for="articleDate">Date</label>
            <input type="date" name="articleDate" />
          </div>
        </article>
        <!-- <article id="keywordsLine">
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
                    </article> -->
      </section>
      <section id="edition">
        <article id="sheet">
          <div class="addTextBlock" id="addTextBlock_1">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <path d="M0,80h512v32H0V80z M0,144h352v32H0V144z M0,208h512v32H0V208z M0,272h352v32H0V272z M0,336h512v32H0V336z M0,400h352v32H0
		V400z" />
              </g>
            </svg>
            <p>Write your news here</p>
            <button type="button" class="deleteButton">x</button>
          </div>
          <div class="textBlock" id="textBlock_1">
            <textarea name="textarea1"></textarea>
            <button type="button" class="deleteButton">x</button>
          </div>





          <!-- <div class="addImageBlock" id="addImageBlock_2">
              <label for="image2">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
                <g>
                  <path d="M57,6H1C0.448,6,0,6.447,0,7v44c0,0.553,0.448,1,1,1h56c0.552,0,1-0.447,1-1V7C58,6.447,57.552,6,57,6z M56,50H2V8h54V50z"
                  />
                  <path d="M16,28.138c3.071,0,5.569-2.498,5.569-5.568C21.569,19.498,19.071,17,16,17s-5.569,2.498-5.569,5.569
                C10.431,25.64,12.929,28.138,16,28.138z M16,19c1.968,0,3.569,1.602,3.569,3.569S17.968,26.138,16,26.138s-3.569-1.601-3.569-3.568
                S14.032,19,16,19z" />
                  <path d="M7,46c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l10.302,10.301c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414
                l-4.807-4.807l9.181-10.054l11.261,10.323c0.407,0.373,1.04,0.345,1.413-0.062c0.373-0.407,0.346-1.04-0.062-1.413l-12-11
                c-0.196-0.179-0.457-0.268-0.72-0.262c-0.265,0.012-0.515,0.129-0.694,0.325l-9.794,10.727l-4.743-4.743
                c-0.374-0.373-0.972-0.392-1.368-0.044L6.339,44.249c-0.415,0.365-0.455,0.997-0.09,1.412C6.447,45.886,6.723,46,7,46z"
                  />
                </g>
              </svg>
              <p>Add an image</p>
              <button type="button" class="deleteButton">x</button>
            </label>
            <input id="image2" name="image2" type="file" />

          </div>



          <div class="imageBlock" id="imageBlock_2">
            <img src="../../images/fondArticleTemp2.jpg" />
            <button type="button" class="deleteButton">x</button>
            <label for="editImage2">change</label>
            <input id="editImage2" name="editImage2" type="file" />
          </div>



        -->



          <!-- <div class="addH2Block" id="addH2Block_1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="8842.593 -2291.594 64.786 53.594">
              <g id="h2" transform="translate(8842 -2338.26)">
                <path id="Tracé_28" data-name="Tracé 28" class="cls-1" d="M2.593-21.167H6.257V-5.786H24.929V-21.167h3.665V15.5H24.929V-2.2H6.257V15.5H2.593ZM38.965-9.7H35.45a12.592,12.592,0,0,1,3.627-8.907,11.658,11.658,0,0,1,8.588-3.483,10.822,10.822,0,0,1,8.189,3.267,10.774,10.774,0,0,1,3.129,7.706,12.014,12.014,0,0,1-1.492,5.849A42.1,42.1,0,0,1,51.7,2.127l-9.135,9.837H59.481V15.5h-24.9L48.587.362a45.243,45.243,0,0,0,5.547-6.774,9.118,9.118,0,0,0,1.284-4.653,7.16,7.16,0,0,0-2.306-5.327,7.809,7.809,0,0,0-5.646-2.233,7.907,7.907,0,0,0-5.846,2.343A10.074,10.074,0,0,0,38.965-9.7Z"
                  transform="translate(-2 68.757)" />
                <path id="Tracé_29" data-name="Tracé 29" class="cls-1" d="M0,112.189H64.379v4.024H0Zm0,8.047H44.26v4.024H0Z" transform="translate(1 -24)"
                />
              </g>
            </svg>
            <p>Sub Title</p>
            <button type="button" class="deleteButton">x</button>
          </div>
          <div class="h2Block" id="h2Block_1">
            <input type="text" name="subtitleInput1" />
            <button type="button" class="deleteButton">x</button>
          </div> -->

          
        </article>

      </section>
      <button id="postArticleSubmit" type="button">Poster l'article</button>
    </form>
    <div id="actionButtonBlock">
      <svg id="addTextButton" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
        <g>
          <path d="M0,80h512v32H0V80z M0,144h352v32H0V144z M0,208h512v32H0V208z M0,272h352v32H0V272z M0,336h512v32H0V336z M0,400h352v32H0V400z"
          />
        </g>
      </svg>
      <svg id="addImageButton" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
        <g>
          <path d="M57,6H1C0.448,6,0,6.447,0,7v44c0,0.553,0.448,1,1,1h56c0.552,0,1-0.447,1-1V7C58,6.447,57.552,6,57,6z M56,50H2V8h54V50z"
          />
          <path d="M16,28.138c3.071,0,5.569-2.498,5.569-5.568C21.569,19.498,19.071,17,16,17s-5.569,2.498-5.569,5.569
                C10.431,25.64,12.929,28.138,16,28.138z M16,19c1.968,0,3.569,1.602,3.569,3.569S17.968,26.138,16,26.138s-3.569-1.601-3.569-3.568
                S14.032,19,16,19z" />
          <path d="M7,46c0.234,0,0.47-0.082,0.66-0.249l16.313-14.362l10.302,10.301c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414
                l-4.807-4.807l9.181-10.054l11.261,10.323c0.407,0.373,1.04,0.345,1.413-0.062c0.373-0.407,0.346-1.04-0.062-1.413l-12-11
                c-0.196-0.179-0.457-0.268-0.72-0.262c-0.265,0.012-0.515,0.129-0.694,0.325l-9.794,10.727l-4.743-4.743
                c-0.374-0.373-0.972-0.392-1.368-0.044L6.339,44.249c-0.415,0.365-0.455,0.997-0.09,1.412C6.447,45.886,6.723,46,7,46z"
          />
        </g>
      </svg>
      <svg id="addH2Button" xmlns="http://www.w3.org/2000/svg" viewBox="8842.593 -2291.594 64.786 53.594">
        <g id="h2" transform="translate(8842 -2338.26)">
          <path id="Tracé_28" data-name="Tracé 28" class="cls-1" d="M2.593-21.167H6.257V-5.786H24.929V-21.167h3.665V15.5H24.929V-2.2H6.257V15.5H2.593ZM38.965-9.7H35.45a12.592,12.592,0,0,1,3.627-8.907,11.658,11.658,0,0,1,8.588-3.483,10.822,10.822,0,0,1,8.189,3.267,10.774,10.774,0,0,1,3.129,7.706,12.014,12.014,0,0,1-1.492,5.849A42.1,42.1,0,0,1,51.7,2.127l-9.135,9.837H59.481V15.5h-24.9L48.587.362a45.243,45.243,0,0,0,5.547-6.774,9.118,9.118,0,0,0,1.284-4.653,7.16,7.16,0,0,0-2.306-5.327,7.809,7.809,0,0,0-5.646-2.233,7.907,7.907,0,0,0-5.846,2.343A10.074,10.074,0,0,0,38.965-9.7Z"
            transform="translate(-2 68.757)" />
          <path id="Tracé_29" data-name="Tracé 29" class="cls-1" d="M0,112.189H64.379v4.024H0Zm0,8.047H44.26v4.024H0Z" transform="translate(1 -24)"
          />
        </g>
      </svg>
    </div>
  </div>

  <script src="../../javascript/jquery-3.2.1.min.js"></script>
  <script src="../../javascript/new_article.js"></script>
</body>
<?php 
    include('../../html/site/footer.html');
?>

</html>