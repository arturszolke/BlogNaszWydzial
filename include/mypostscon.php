<?php
    if (!isset($_SESSION['id']))
        header("Location: ../index.php");
?>
<div class="container">
    <div class="row m-3">
        <span class="border border-secondary rounded p-3">
            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">
                        <a><?php echo $title; ?></a>
                    </h3>

                </div>

                <div class="panel-body" style="word-wrap: break-word;">
                    <?php echo $content; ?>
                </div>

                <div class="panel-body text-center" style="word-wrap: break-word;">
                    <img id="output" class="img-fluid rounded mb-3 w-75" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['photo']); ?>" alt="" />
                </div>

                <span class="label label-default">
                    <?php echo $postdate ?>
                </span>

                <a class="btn btn-outline-danger btn-sm float-end" href="include/del.php?id=<?php echo $post_id; ?>" role="button">Usuń</a>
                <a class="btn btn-primary btn-sm float-end me-2" onclick="getData('content', 'include/editpostcon.php?id=<?php echo $post_id; ?>')" href="#" role="button">Edytuj</a>
                
            </div>
        </span>
    </div>
</div>