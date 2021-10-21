<?php
$post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail($post_id);
?>
<header class="entry-header">
    <?php if ($has_post_thumbnail) : ?>

        <div class="entry-image">
            <a href="<?php echo esc_url(get_the_permalink()) ?> ">
                <img src="" alt="" class="img-fluid img-thumbnail">
            </a>
        </div>

    <?php endif; ?>
</header>