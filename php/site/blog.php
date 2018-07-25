<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Corentin Dupont : Blog</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>

<?php 
        include('../../php/site/header.php');
    ?>

<body>
  <div class="pageBody" id="blog">
    <section id="filtre">
      <article id="filterContentBlock">
        <!--<label class="switch">
            <input type="checkbox">
            <div class="slider round"></div>
          </label>
          <div class="filterType" id="yearChoice">
              <p>
                  <input type="checkbox" id="yearCheckBox">
                  <label for="yearCheckBox">Année</label>
              </p>
              <label>
                  <span class="custom-dropdown custom-dropdown--white">
                      <select class="custom-dropdown__select custom-dropdown__select--white">
                          <option>2016</option>
                          <option>2017</option>
                      </select>
                  </span>
              </label>
          </div>
          <div class="filterType" id="passionChoice">
              <p>
                  <input type="checkbox" id="passionCheckBox">
                  <label for="passionCheckBox">Passion</label>
              </p>
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
          <div class="filterType" id="otherChoice">
              <p>
                  <input type="checkbox" id="otherCheckBox">
                  <label for="otherCheckBox">Autre</label>
              </p>
              <label>
                  <span class="custom-dropdown custom-dropdown--white">
                      <select class="custom-dropdown__select custom-dropdown__select--white">
                          <option>Musique</option>
                          <option>Univers Asiatique</option>
                          <option>Informatique </option>
                      </select>
                  </span>
              </label>
          </div>-->
        <p>Ouups ... Le filtre est indisponible :c</p>
      </article>
      <article id="bar">
        <div id="barContentBlock">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
            <g>
              <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"
              />
            </g>
          </svg>
          <p>ouvrir</p>
        </div>
      </article>
    </section>
    <section id="allArticles">
      <?php 
                    include('../../php/site/articles_loading.php');
                ?>
    </section>
  </div>

</body>

<?php 
        include('../../html/site/footer.html');
    ?>

<script src="../../javascript/jquery-3.2.1.min.js"></script>
<script src="../../javascript/blog.js"></script>

</html>