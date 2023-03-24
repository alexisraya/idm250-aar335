<!-- <article> -->
<div class="card mb-3 my-main-card">
        <a href="<?php echo get_the_permalink(); ?>" class="text-decoration-none">
            <div class="my-card-images">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Featured Image" class="card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
            </div>
        </a>
    </div>
<!-- </article> -->