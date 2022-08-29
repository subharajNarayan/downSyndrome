<?php 
$title = $categories = $el_class = '';
$per_page = 4;
$order = 'DESC';
$event_type = '';
$orderby = 'event_date';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

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

if($pagination){
   $paged = get_query_var( 'paged', 1 );
   $args['paged'] = $paged; 
}

$loop = new WP_Query($args);
?>
<div class="widget vc-widget gva-event-list <?php echo esc_attr($el_class) ?>">
   <div class="widget-content">
      <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
         <?php get_template_part( 'templates/event/content', 'item-v1' ); ?>
      <?php endwhile; 
      wp_reset_postdata();
      ?>

      <?php if($pagination){ ?>
          <div class="pagination">
           <?php echo kunco_pagination($loop); ?>
         </div>
      <?php } ?>

   </div>
</div>