<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>
            <?php 
                $allArticleDatas = explode(';',$_GET['allArticleDatas']);
                echo 'Corentin Dupont : '.$allArticleDatas[1];
            ?>
        </title>
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <?php 
        include('../../php/site/header.php');
    ?>
    <body>
        <div class="pageBody" id="articleBody">
            <section id="sheet">
                <?php 
                    include('../../php/site/article_content_loading.php');
                ?>
            </section>
        </div>
    </body>
    <?php 
        include('../../html/site/footer.html');
    ?>
</html>