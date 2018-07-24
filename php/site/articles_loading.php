<?php 

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

$sql = "SELECT * FROM article ORDER BY Date_Article";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        $articleID = $row["Id_Article"];
        $articleTitle = $row["Nom_Article"];
        
        $articleDescription = null;
        $articleImage = null;
        
        $sql = "SELECT * FROM contenu_article WHERE Id_Article = ".$row["Id_Article"]." ORDER BY Ordre_Contenu_Article";
        
        $result2 = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result2) > 0) {
            $alreadyGetFirstText = false;
            $alreadyGetFirstImage = false;
            while($row2 = mysqli_fetch_assoc($result2)) {
                if($row2["Type_Contenu_Article"] == 'text' && !$alreadyGetFirstText){
                    $alreadyGetFirstText=true;
                    $articleDescription = $row2["Texte_Contenu_Article"];
                }
                if($row2["Type_Contenu_Article"] == 'image' && !$alreadyGetFirstImage){
                    $alreadyGetFirstImage=true;
                    $articleImage = $row2["Texte_Contenu_Article"];
                }
            }
        }
        
        $allArticleDatas = $articleID.";".$articleTitle.";".$row["Auteur_Article"].";".$row["Date_Article"];
        echo   '<a href="article.php?allArticleDatas='.$allArticleDatas.'" class="article" id="'.$articleID.'">
                    <h2>'.$articleTitle.'</h2>
                    <div class="articleBody">
                        <div class="articleImageBlock">
                            <img src="'.$articleImage.'"/>
                        </div>

                        <p class="articleBodyHover">'.$articleDescription.'</p>
                    </div>
                </a>';
        
    }
} else {

}

mysqli_close($conn);

?>