<?php
    session_start();
    
    if (!isset($_SESSION['id']))
        header("Location: ../index.php");
?>

<div class="container">
    <div class="row">

        <div class="col"></div>

        <div class="col-7">

            <form action="include/action_newpost.php" onsubmit="return(validate_newpost());" method="post" name="myForm" enctype="multipart/form-data">
                <div class="my-3">
                    <label class="form-label">Tytuł</label>
                    <input type="text" class="form-control" name="title" placeholder="Tytuł" value="">
                </div>

                <div class="mb-3">
                    <label class="form-label">Treść</label>
                    <textarea class="form-control" rows="5" name="content" id="editor" placeholder="Treść"></textarea>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]); document.getElementById('file_name').innerHTML = $(this).val().split('/').pop().split('\\').pop()" lang="pl">
                </div>

                <div class="text-center">
                    <img id="output" class="img-fluid rounded mb-3" src="/pictures/brak.png" alt="" />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end mb-3">Dodaj post</button>
                </div>
            </form>

        </div>

        <div class="col"></div>

    </div>
</div>