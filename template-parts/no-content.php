<div class="container">
    <h1 class="text-center"><?php esc_html_e('No se encontraron publicaciones', BWC_DOMAIN); ?></h1>

    <div class="">
        <?php if (is_home() && current_user_can('publish_posts')) :

            printf(
                wp_kses(
                    __('Listo para hacer tu primera publicación? <a href="%s">Empieza aquí</a> '),
                    [
                        'a' => [
                            'href' => [],
                        ]
                    ],
                ),
                esc_url(admin_url('post-new.php'))
            );
        elseif (is_search()) : ?>
            <p><?php esc_html_e('Lo sntimos, no hay nada qu coincida con tu busqueda', BWC_DOMAIN) ?> </p>
        <?php
            get_search_form();
        else : ?>
            <p><?php esc_html_e('Parece que no encontramos lo que buscas', BWC_DOMAIN) ?> </p>
        <?php endif; ?>
    </div>
</div>