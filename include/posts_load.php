<?php
    include_once 'db_connect.php';

    $query = "SELECT * FROM posts ORDER BY postdate DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($post = mysqli_fetch_assoc($result)) {
            $post_id = $post['post_id'];
            $nickname = $post['nickname'];
            $postdate = $post['postdate'];
            $title = $post['title'];
            $content = $post['content'];

            include("post.php");
        }
    } else {
?>

    <div class="container">
        <div class="row m-3">
            <h3 class="panel-title text-center">
                Brak postów.
            </h3>
        </div>
    </div>

<?php
    }
?>