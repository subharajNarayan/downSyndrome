<?php 
   $item_classes = 'all ';
   $post_category = ''; $separator = ' '; $output = '';
   $item_cats = get_the_terms( get_the_ID(), 'category_portfolio' );
   if(!empty($item_cats) && !is_wp_error($item_cats)){
      foreach((array)$item_cats as $item_cat){
         $item_classes .= $item_cat->slug . ' ';
         $output .= '<a href="'.get_category_link( $item_cat->term_id ).'" title="' . esc_attr( sprintf( esc_attr__( "View all posts in %s", 'kunco' ), $item_cat->name ) ) . '">'.$item_cat->name.'</a>'.$separator;
      }
      $post_category = trim($output, $separator);
   }
   $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
   $link_meta = get_post_meta(get_the_ID(), 'kunco_other_link', true);
   $link = !empty($link_meta) ? $link_meta : get_the_permalink();
?>
<div class="item-columns <?php echo esc_attr($item_classes) ?>">
   <div class="portfolio-block portfolio-item-v2 isotope-item margin-bottom-30">      
      <div class="portfolio-content">
         <div class="images">
            <?php if ( has_post_thumbnail()) {
               the_post_thumbnail('full');
            }?>
            <div class="category"><?php echo trim($post_category) ?></div> 
         </div>
         <div class="content-inner">
            <div class="title"><a href="<?php echo esc_url($link); ?>"><?php the_title(); ?></a></div> 
            <div class="summary"><?php echo kunco_limit_words( 20, get_the_excerpt(), get_the_content() ); ?></div>
         </div>
      </div>
   </div>
</div>