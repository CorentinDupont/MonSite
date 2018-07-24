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

//Création de l'article
$sql = "INSERT INTO article (Nom_Article, Auteur_Article, Date_Article)
    VALUES ('".$_POST['articleDatas'][0]."', '".$_POST['articleDatas'][1]."', '".$_POST['articleDatas'][2]."')";



if (mysqli_query($conn, $sql)) {
    $id_article =  mysqli_insert_id($conn);
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $response_array['status'] == "Error: " . $sql . "<br>" . mysqli_error($conn);
    header('Content-type: application/json');
    echo json_encode($response_array);
}



foreach($_POST['articleContent'] as $key => $oneContent){
    $key++;
    if($oneContent[0]=='image'){
        $isGIF = false;
        header('Content-Type: image/png');
        define('UPLOAD_DIR', '../../images/');
        $img = $oneContent[1];
        if(strpos($img, 'data:image/png;base64') !== false){
            $img = str_replace('data:image/png;base64,', '', $img);
        }elseif(strpos($img, 'data:image/jpeg;base64') !== false){
            $img = str_replace('data:image/jpeg;base64,', '', $img);
        }elseif(strpos($img, 'data:image/jpg;base64') !== false){
            $img = str_replace('data:image/jpg;base64,', '', $img);
        }elseif(strpos($img, 'data:image/gif;base64') !== false){
            $img = str_replace('data:image/gif;base64,', '', $img);
            $isGIF = true;
        }else{
            
        }
        
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        if($isGIF){
             $oneContent[1] = UPLOAD_DIR . uniqid() . '.gif';
        }else{
             $oneContent[1] = UPLOAD_DIR . uniqid() . '.png';
        }
        
        file_put_contents($oneContent[1], $data);
        
    }else{
        $oneContent[1] = mysqli_real_escape_string($conn, $oneContent[1]);
    }
    
    
    $sql = "INSERT INTO contenu_article (Texte_Contenu_Article, Type_Contenu_Article, Ordre_Contenu_Article, Id_Article)
    VALUES ('".$oneContent[1]."', '".$oneContent[0]."', '".$key."', '".$id_article."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $response_array['status'] == "Error: " . $sql . "<br>" . mysqli_error($conn);
        header('Content-type: application/json');
        echo json_encode($response_array);
    }
}



mysqli_close($conn);


header('Content-type: application/json');
echo json_encode($response_array);












function debug($message){
    echo '<script>console.log('.$variable.')</script>';
}


?>