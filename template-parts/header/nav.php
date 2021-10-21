<?php
$menu_class        = BWC\THEME\Classes\Bwc_register_menus_class::get_instance();
$header_menu_id    = $menu_class->get_menu_id('header_menu_bwc');
$header_menu_items = wp_get_nav_menu_items($header_menu_id);
// echo '<pre>';
// var_dump($header_menu_items);
// echo '</pre>';
// wp_die();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php home_url('/') ?> ">
      <?php if (function_exists('the_custom_logo')) : the_custom_logo();
      endif; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">

      <?php

      if (!empty($header_menu_items) && is_array($header_menu_items)) : ?>

        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <?php

          foreach ($header_menu_items as $menu_item) :

            if (!$menu_item->menu_item_parent) :

              $child_menu_items = $menu_class->get_child_menu_items($header_menu_items, $menu_item->ID);
              $has_children = !empty($child_menu_items) && is_array($child_menu_items);

              if (!$has_children) : ?>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo esc_url($menu_item->url) ?> ">
                    <?php echo esc_html($menu_item->title) ?>
                  </a>
                </li>

              <?php else : ?>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo esc_html($menu_item->title) ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                    <?php foreach ($child_menu_items as $child_item) : ?>

                      <li>
                        <a class="dropdown-item" href="<?php echo esc_url($child_item->url) ?>"><?php echo esc_html($child_item->title) ?></a>
                      </li>

                    <?php endforeach; ?>

                  </ul>
                </li>

          <?php endif;
            endif;
          endforeach;


          ?>
        </ul>

      <?php endif;


      ?>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php


// wp_nav_menu([
//   'theme_location' => 'header_menu_bwc',
//   // 'theme_location' => 'bwc_footer_menu',
// ])



?>