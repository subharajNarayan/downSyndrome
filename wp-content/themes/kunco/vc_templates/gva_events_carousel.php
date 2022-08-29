<?php 
$title = $categories = $el_class = '';
$per_page = 4;
$columns = 1;
$order = 'DESC';
$event_type = '';
$orderby = 'event_date';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$carousel_attrs = array(
  'items'               => $items_lg,
  'items_lg'            => $items_lg,
  'items_md'            => $items_md,
  'items_sm'            => $items_sm,
  'items_xs'            => $items_xs,
  'loop'                => $ca_loop,
  'speed'               => $ca_speed,
  'auto_play'           => $ca_auto_play,
  'auto_play_speed'     => $ca_auto_play_speed,
  'auto_play_timeout'   => $ca_auto_play_timeout,
  'auto_play_hover'     => $ca_play_hover,
  'navigation'          => $ca_navigation,
  'rewind_nav'          => $ca_rewind_nav,
  'pagination'          => $ca_pagination,
  'mouse_drag'          => $ca_mouse_drag,
  'touch_drag'          => $ca_touch_drag
);

$args = array(
  'post_type'          => 'gva_event',
  'post_status'       => 'publish',
   'ignore_sticky_posts'  => true,
   'posts_per_page'       => $per_page,
   'order'             => $order
);

if($event_cats){
  $field_name = is_numeric($event_cats[0]) ? 'term_id':'slug';
  $args['tax_query'] = array(
    array(
      'taxonomy' => 'gva_event_cat',
      'terms' => $event_cats,
      'field' => $field_name,
      'include_children' => false
    )
  );
}

if($orderby == 'event_date_start'){
  $args['meta_key']          = 'kunco_start_time';
  $args['orderby']           = 'meta_value';
}elseif($orderby == 'event_date_finish'){
  $args['meta_key']          = 'kunco_finish_time';
  $args['orderby']           = 'meta_value';
}else{  
  $args['orderby'] = $orderby;
}

if($event_type == 'upcoming'){
    $args['meta_query'] = array( 
        array(
            'key' => 'kunco_start_time', 
            'value' => date("Y-m-d"), 
            'compare' => '>', 
            'type' => 'DATE' 
        )
    );
  }

  if($event_type == 'ongoing'){
    $args['meta_query'] = array( 
    array(
        'key' => 'kunco_start_time', 
        'value' => date("Y-m-d"), 
        'compare' => '=', 
        'type' => 'DATE' 
        )
    );
  }

  if($event_type == 'past_events'){
    $args['meta_query'] = array( 
    array(
        'key' => 'kunco_start_time', 
        'value' => date("Y-m-d"), 
        'compare' => '<', 
        'type' => 'DATE' 
        )
    );
  }


$loop = new WP_Query($args);
?>
<div class="widget vc-widget gva-event-carousel <?php echo esc_attr($el_class) ?>">
   <div class="products carousel-view">
      <div class="init-carousel-owl owl-carousel" <?php echo kunco_set_carousel_attrs($carousel_attrs) ?>>
         <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
               <div class="item"><?php get_template_part( 'templates/event/content', 'item' ); ?></div>
         <?php endwhile; 
         wp_reset_postdata();
         ?>
      </div>
   </div>
</div>