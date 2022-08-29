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

$loop = new WP_Query($args);
?>
<div class="widget vc-widget gva-event-list-small <?php echo esc_attr($el_class) ?>">
   <div class="widget-content">
      <?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
         <?php 
            $address = get_post_meta(get_the_id(), 'kunco_address', true );
            $day = $month = '';
            $start_time = get_post_meta(get_the_id(), 'kunco_start_time', true );
            if($start_time){
               $start_time = date_create($start_time);
               $day = date_format($start_time, 'd');
               $month = date_format($start_time, 'F');
            } 
         ?>
         <div class="event-block-list-small clearfix">
           <div class="event-date"><span class="day"><?php echo esc_attr($day) ?></span><span class="month"><?php echo esc_attr($month) ?></span></div>
            <div class="event-content">
               <div class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
               <div class="event-address"><i class="fa fa-map-marker"></i><?php echo esc_html($address) ?></div>
            </div>  
         </div>
         <?php endwhile; 
         wp_reset_postdata();
      ?>
   </div>
</div>