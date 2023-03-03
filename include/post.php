<div class="container">
    <div class="row m-3">
            <div class="card card-default bg-light">

                <div class="card-heading">
                    <h3 class="card-title">
                        <h2><?php echo $title; ?></h2>
                    </h3>
                </div>

                <div class="card-body" style="word-wrap: break-word;">
                    <?php echo $content; ?>
                </div>

                <div class="card-body text-center" style="word-wrap: break-word;">
                    <img id="output" class="img-fluid rounded mb-3 w-75" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post['photo']); ?>" alt="" />
                </div>

                <span class="text-primary">
                    <a><?php echo $nickname ?></a>
                </span>

                <span class="label label-default">
                    <?php echo $postdate ?>
                </span>
            </div>
    </div>
</div>