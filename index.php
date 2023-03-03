<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog</title>
    
    <?php include 'include/bootstrap.php'; ?>
    <script src="tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<?php include 'include/db_connect.php'; ?>

<body onload="getData('content', 'include/<?php $loadPage = isset($_GET['loadPage']) ? $_GET['loadPage'] : 'posts_load.php'; echo $loadPage; ?>')">
    <div class="nav_bar">

        <?php
        if (isset($_SESSION['id'])) {
            include 'include/navbar_logout.php';
        } else {
            include 'include/navbar.php';
        }
        ?>
        
    </div>

    <div onload="location.reload()" class="text-center">
        <div id="loader" class="spinner-border m-5 d-none" role="status">

        </div>
    </div>

    <div id="content">

    </div>

    <?php include 'include/bootskr.php'; ?>
    <script type="text/javascript" src="ajax.js"></script>
    <script type="text/javascript" src="valid.js"></script>
</body>

</html>