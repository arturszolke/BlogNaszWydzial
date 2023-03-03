<div class="container">
    <div class="row m-3">
        <span class="border border-secondary rounded p-3">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <h2><?php echo $title; ?></h2>
                    </h3>
                </div>

                <div class="panel-body" style="word-wrap: break-word;">
                    <?php echo $content; ?>
                </div>

                <div class="panel-body text-center" style="word-wrap: break-word;">
                    <img id="output" class="img-fluid rounded mb-3 w-75" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['photo']); ?>" alt="" />
                </div>

                <span class="text-primary">
                    <a><?php echo $nickname ?></a>
                </span>

                <span class="label label-default">
                    <?php echo $postdate ?>
                </span>
            </div>
        </span>
    </div>
</div>