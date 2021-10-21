<div class="card mb-3" style="width: 23rem;">
    <a href="<?php the_permalink() ?> " class="btn btn-primary btn-sm" type="button">
        <?php the_post_thumbnail('thumbnail', ['class' => 'card-img-top',]) ?>
    </a>
    <div class=" card-body">
        <h5 class="card-title"><?php the_title() ?></h5>
        <p class="card-text"><?php the_excerpt() ?></p>
        <div class="d-grid ">
            <a href="<?php the_permalink() ?> " class="btn btn-primary btn-sm" type="button">Button</a>
        </div>
    </div>
</div>