<?php
    include_once 'db_connect.php';

    session_start();
    if (isset($_SESSION['id'])) {
        $nick = $_SESSION['name'];
        $post_id = $_GET['id'];

        $sql = "DELETE FROM posts WHERE post_id = $post_id;";

        try {
            db_query($conn, $sql);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        } finally {
            echo "Tried to delete post $post_id";
            $conn->close();
            header("Location: ../index.php?loadPage=myposts_load.php");
        }
    }else{
        header("Location: ../index.php");
    }