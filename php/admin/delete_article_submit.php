<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corentin_dupont";

$response_array['status'] == 'success';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    $response_array['status'] == 'can\'t connect to server';
    header('Content-type: application/json');
    echo json_encode($response_array);
}

$allIdsString = "";
foreach($_POST['allDeleteArticlesIDs'] as $key => $id){
    if($key == count($_POST['allDeleteArticlesIDs'])-1){
        $allIdsString.="'".$id."'";
    }else{
        $allIdsString.="'".$id."', ";
    }
    
}

//Suppression des images du dossier images des articles
$sql = "SELECT Texte_Contenu_Article FROM contenu_article WHERE Id_Article IN (".$allIdsString.") AND Type_Contenu_Article = 'image'";
echo '------------------------- delete image';
echo '------------------------- '.$allIdsString;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '------------------------- someResult';
    while($row = mysqli_fetch_assoc($result)) {
        echo '-------------------------'.$row['Texte_Contenu_Article'];
        $imagePath = realpath($row['Texte_Contenu_Article']);
        echo '-------------------------'.$imagePath;
        if(is_writable($imagePath)){
            unlink($imagePath);
        }
    }
}

//Suppression de l'article
$sql = "DELETE FROM article WHERE Id_Article IN (".$allIdsString.")";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $response_array['status'] == "Error: " . $sql . "<br>" . mysqli_error($conn);
    header('Content-type: application/json');
    echo json_encode($response_array);
}





//Suppression du contenu de l'article
$sql = "DELETE FROM contenu_article WHERE Id_Article IN (".$allIdsString.")";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $response_array['status'] == "Error: " . $sql . "<br>" . mysqli_error($conn);
    header('Content-type: application/json');
    echo json_encode($response_array);
}

mysqli_close($conn);

header('Content-type: application/json');
echo json_encode($response_array);

function debug($message){
    echo '<script>console.log('.$variable.')</script>';
}


?>