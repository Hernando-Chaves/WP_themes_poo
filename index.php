<?php get_header() ?>
<div id="primary">
    <main id="main" class="site-main mt-5">
        <div class="container">
            <?php
            if (is_home() && !is_front_page()) : ?>
                <h1 class="mb-5"><?php single_post_title(); ?> </h1>
            <?php endif;
            if (have_posts()) : ?>
                <div class="row d-flex justify-content-around">
                    <?php while (have_posts()) : the_post();
                        get_template_part('template-parts/content');
                    endwhile; ?>
                </div>
            <?php else :
                get_template_part('template-parts/no-content');
            endif; ?>
        </div>
        <?php get_template_part('template-parts/no-content'); ?>
    </main>
</div>
<?php get_footer() ?>