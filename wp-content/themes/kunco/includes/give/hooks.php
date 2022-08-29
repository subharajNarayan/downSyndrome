<?php
if(!function_exists('kunco_give_breadcrumb')){
   function kunco_give_breadcrumb(){
      $result = kunco_style_breadcrumb();
      extract($result);
      if(isset($no_breadcrumbs) && $no_breadcrumbs == true){
         echo '<div class="disable-breadcrumb clearfix"></div>';
         return false;
      }
      ?> 
      
      <div class="custom-breadcrumb <?php echo implode(' ', $classes); ?>" <?php echo(count($styles) > 0 ? 'style="' . implode(';', $styles) . '"' : ''); ?>>
         <?php if($styles_overlay){ ?>
            <div class="breadcrumb-overlay" style="<?php echo esc_attr($styles_overlay); ?>"></div>
         <?php } ?>
         <div class="breadcrumb-main">
           <div class="container">
             <?php if($title && $show_page_title){ 
               echo '<h2 class="heading-title">' . esc_html( $title ) . '</h2>';
             } ?>
             <?php kunco_general_breadcrumbs(); ?>
             <div class="hidden back-to-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Back To Home', 'kunco' ) ?></a></div>
           </div>   
         </div>   
      </div>
      <?php
   }
   add_action( 'kunco_give_before_main_content', 'kunco_give_breadcrumb', 20 );
}

function kunco_give_change_posts_per_page( $query ) {
   if ( is_admin() || ! $query->is_main_query() ) {
      return;
   }
   $posts_per_page = kunco_get_option('give_posts_per_page', 6);
   if ( is_post_type_archive( 'give_forms' ) ) {
      $query->set( 'posts_per_page', $posts_per_page );
   }
}
add_filter( 'pre_get_posts', 'kunco_give_change_posts_per_page' );

function kunco_give_setup_taxonomies(){
  if(function_exists('give_update_option') ){
    if(give_get_option( 'categories', '' )){
      give_update_option('categories', 'enabled');
    }
    if(give_get_option( 'form_sidebar', '') || give_get_option( 'form_sidebar') == 'enabled'){
      give_update_option('form_sidebar', 'disabled');
    }
  }
}
add_action( 'init', 'kunco_give_setup_taxonomies', 1 );

add_action('give_embed_head', 'kunco_give_embed_head', 11);
function kunco_give_embed_head(){
   $custom_css = '.give-form-templates{padding: 55px 0 50px;}';
   $custom_css .= '.give-form-templates .give-embed-form{width: 100%; max-width: 100%;}';
   $custom_css .= '#give-donor-dashboard{max-width: 100%!important;}';
   $custom_css .= '.give-donor-dashboard-desktop-layout{box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08)!important; border-radius: 0!important;border:1px solid rgba(0, 0, 0, 0.08)!important';
   wp_enqueue_style(
     'kunco-custom-style', 
      KUNCO_THEME_URL . '/css/custom_script.css'
   );
   wp_add_inline_style( 'kunco-custom-style', $custom_css );
}
