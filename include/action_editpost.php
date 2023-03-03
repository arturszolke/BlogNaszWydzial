<?php
include_once 'db_connect.php';

session_start();

if (isset($_SESSION['id'])) {
    $nick = $_SESSION['name'];
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);

    if (!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
        }
    }

    if (!isset($imgContent)) {
        $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE post_id = $id";
    } else {
        $sql = "UPDATE posts SET title = '$title', content = '$content', photo = '$imgContent' WHERE post_id = $id";
    }

    try {
        db_query($conn, $sql);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    } finally {
        echo "Tried to edit post $id";
        $conn->close();
        header("Location: ../index.php?loadPage=myposts_load.php");
    }
} else
    header("Location: ../index.php");
