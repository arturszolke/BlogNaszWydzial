<?php
    include_once 'db_connect.php';

    session_start();
    if (isset($_SESSION['id'])) {
        $edit_post_id = $_GET['id'];
        $nick = $_SESSION['name'];

        $query = "SELECT * FROM posts WHERE post_id = $edit_post_id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $post_id = $post['post_id'];
                $nickname = $post['nickname'];
                $postdate = $post['postdate'];
                $title = $post['title'];
                $content = $post['content'];
                $image = $post['photo'];
            }
        }

        $conn->close();
    } else {
        header("Location: ../index.php");
    }
?>
<div class="container">
    <div class="row">

        <div class="col"></div>
        <div class="col-8">
            <form action="include/action_editpost.php" onsubmit="return(validate_newpost());" method="post" name="myForm" enctype="multipart/form-data">

                <div class="my-3">
                    <input type="hidden" name="id" value="<?= $post_id ?>">
                    <label class="form-label">Tytuł</label>
                    <input type="text" class="form-control" name="title" placeholder="Tytuł" value="<?= $title ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Treść</label>
                    <textarea class="form-control" rows="5" name="content" id="editor"
                        placeholder="Treść"><?= $content ?></textarea>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]); document.getElementById('file_name').innerHTML = $(this).val().split('/').pop().split('\\').pop()" lang="pl">
                </div>

                <div class="text-center">
                    <img id="output" class="img-fluid rounded mb-3"
                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>" alt="" />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end mb-3">Zapisz post</button>
                </div>
                
            </form>
        </div>
        <div class="col"></div>

    </div>
</div>