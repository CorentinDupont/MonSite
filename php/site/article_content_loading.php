<?php 

$allArticleDatas = explode(';',$_GET['allArticleDatas']);
echo '<h1>'.$allArticleDatas[1].'</h1>';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corentin_dupont";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM contenu_article WHERE id_article = ".$allArticleDatas[0]." ORDER BY ordre_contenu_article";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($row['Type_Contenu_Article']=='text'){
            echo '<p>'.$row['Texte_Contenu_Article'].'</p>';
        }elseif($row['Type_Contenu_Article']=='image'){
            echo '<img src="'.$row['Texte_Contenu_Article'].'"/>';
        }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

$dateElements = explode('-', $allArticleDatas[3]);
array_reverse($dateElements);
$realDate = $dateElements[0].'/'.$dateElements[1].'/'.$dateElements[2];
echo'<article id="authorBlock">
        <div id="authorImageContainer">
            <img src="../../images/CorentinDupontPhotoProfil_bg_light_blue.png"/>
        </div>
        <p>'.$allArticleDatas[2].', '.$realDate.'</p>
    </article>';
?>