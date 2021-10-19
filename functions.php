<?php 


function montheme_support(){
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support('menus'); 
add_image_size( 'post-thumbnail', 400, 400, true );
register_nav_menu('header', 'En tete du menu');
}



function montheme_register_assets(){
 wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css');
 wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', [], false, true);
 wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
 wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [],false, true);
 wp_enqueue_style( 'bootstrap' );
 wp_enqueue_style( 'customcss' );
 wp_enqueue_script( 'bootstrap' );
}

function montheme_menu_class($classes){
    $classes = [];
    $classes[] = 'nav-item';
    return $classes;
    echo($classes);
 
}

function montheme_menu_link_class($attr){
    $attr['class'] = 'nav-link';
    return $attr;
}

function montheme_pagination(){
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
      echo  '<nav aria-label="Pagination" class"my-4">';
      echo  '<ul class="pagination">';
      foreach ($pages as $page) {
          $active = strpos($page, 'current') !== false;
          $class = 'page-item';
      
      if ($active) {
          $class .= ' active';
      }
  echo '<li class="'. $class .'">';
  echo str_replace('page-numbers', 'page-link', $page);
  echo '</li>';
  }
    echo '</ul>';
    echo '</nav>';
    
 }

 


add_action('after_setup_theme','montheme_support');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_link_class');
