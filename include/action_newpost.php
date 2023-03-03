<?php
include_once 'db_connect.php';

session_start();

if (isset($_SESSION['id'])) {
    $nick = mysqli_real_escape_string($conn, $_SESSION['name']);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);

    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));  
        }
    }
    if(!isset($imgContent)){
        $imgContent = "";
    }
    $sql = "INSERT INTO posts (post_id, nickname, postdate, title, content, photo) VALUES (NULL, '$nick' , CURRENT_TIMESTAMP(), '".$title."', '".$content."', '$imgContent')";

try {
    db_query($conn, $sql);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Tried to create new post";
    $conn->close();
    header("Location: ../index.php");
}

} else
    header("Location: ../index.php");
?>