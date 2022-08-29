<?php
function kunco_custom_color_theme() {
   $theme_color = kunco_get_option('color_theme', '');
   $theme_color_second = kunco_get_option('color_theme_second', '');
   if( !empty($theme_color) || !empty($theme_color_second) ){ 
      ob_start();

   /* ----- Style Color Theme ----- */
?>

<?php if( !empty($theme_color) ){ ?>
 a:hover, a:focus {
   color: <?php echo esc_attr($theme_color) ?>;
}
.btn-link:hover, .btn-link:focus {
   color: <?php echo esc_attr($theme_color) ?>;
}
.pagination > li > a:hover, .pagination > li > a:focus,
 .pagination > li > span:hover,
 .pagination > li > span:focus {
   color: <?php echo esc_attr($theme_color) ?>;
}
.page-links > a, .page-links > span:not(.page-links-title) {
   background: <?php echo esc_attr($theme_color) ?>;
}
 ul.feature-list > li:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.pager .paginations a.active, .pager .paginations a:hover, .pager .paginations a:focus {
   background: <?php echo esc_attr($theme_color) ?>;
   border-color: <?php echo esc_attr($theme_color) ?>;
}
.bg-theme {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
.text-theme {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.btn-theme, button, .btn, .btn-white {
   background: <?php echo esc_attr($theme_color) ?>;
}
.btn-inline {
   color: <?php echo esc_attr($theme_color) ?>;
}
.btn-inline:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
 input[type*="submit"]:not(.fa) {
   background: <?php echo esc_attr($theme_color) ?>;
}
.socials a i {
   background: <?php echo esc_attr($theme_color) ?>;
}
.socials-2 a i:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
 #wp-footer a:hover {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
 #wp-footer .widget .widget-title, #wp-footer .widget .widgettitle, #wp-footer .widget .wpb_singleimage_heading, #wp-footer .wpb_single_image .widget-title, #wp-footer .wpb_single_image .widgettitle, #wp-footer .wpb_single_image .wpb_singleimage_heading, #wp-footer .wpb_content_element .widget-title, #wp-footer .wpb_content_element .widgettitle, #wp-footer .wpb_content_element .wpb_singleimage_heading {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #wp-footer .widget .widget-title:before, #wp-footer .widget .widget-title:after, #wp-footer .widget .widgettitle:before, #wp-footer .widget .widgettitle:after, #wp-footer .widget .wpb_singleimage_heading:before, #wp-footer .widget .wpb_singleimage_heading:after, #wp-footer .wpb_single_image .widget-title:before, #wp-footer .wpb_single_image .widget-title:after, #wp-footer .wpb_single_image .widgettitle:before, #wp-footer .wpb_single_image .widgettitle:after, #wp-footer .wpb_single_image .wpb_singleimage_heading:before, #wp-footer .wpb_single_image .wpb_singleimage_heading:after, #wp-footer .wpb_content_element .widget-title:before, #wp-footer .wpb_content_element .widget-title:after, #wp-footer .wpb_content_element .widgettitle:before, #wp-footer .wpb_content_element .widgettitle:after, #wp-footer .wpb_content_element .wpb_singleimage_heading:before, #wp-footer .wpb_content_element .wpb_singleimage_heading:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
  .topbar {
   background: <?php echo esc_attr($theme_color) ?>;
}
.topbar a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.topbar .socials > li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-search .control-search {
   background: <?php echo esc_attr($theme_color) ?>;
}
 header.header-default .cart-v2 a.mini-cart .mini-cart-items {
   background: <?php echo esc_attr($theme_color) ?>;
}
.header-mobile .mini-cart-header a.mini-cart .mini-cart-items {
   background: <?php echo esc_attr($theme_color) ?>;
}
.header-v1 .header-bottom {
   background: <?php echo esc_attr($theme_color) ?>;
}
.header-v1 .header-bottom .header-bottom-inner .quick-button a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.header-v2 .header-bottom .header-bottom-inner .quick-button a {
   background: <?php echo esc_attr($theme_color) ?>;
}
.header-v4 .header-bottom .header-bottom-inner .quick-button a {
   background: <?php echo esc_attr($theme_color) ?>;
}
 ul.navbar-nav.gva-nav-menu > li .submenu-inner li a:hover, ul.navbar-nav.gva-nav-menu > li .submenu-inner li a:focus, ul.navbar-nav.gva-nav-menu > li .submenu-inner li a:active, ul.navbar-nav.gva-nav-menu > li ul.submenu-inner li a:hover, ul.navbar-nav.gva-nav-menu > li ul.submenu-inner li a:focus, ul.navbar-nav.gva-nav-menu > li ul.submenu-inner li a:active, ul.gva-my-account-menu > li .submenu-inner li a:hover, ul.gva-my-account-menu > li .submenu-inner li a:focus, ul.gva-my-account-menu > li .submenu-inner li a:active, ul.gva-my-account-menu > li ul.submenu-inner li a:hover, ul.gva-my-account-menu > li ul.submenu-inner li a:focus, ul.gva-my-account-menu > li ul.submenu-inner li a:active {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gavias-off-canvas-toggle {
   background: <?php echo esc_attr($theme_color) ?>;
}
 #gavias-off-canvas .off-canvas-top .top-social > a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
   border-color: <?php echo esc_attr($theme_color) ?>;
}
 #gavias-off-canvas .off-canvas-top .gavias-off-canvas-close:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li > a.active > a {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li a:hover, #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li a:focus {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #gavias-off-canvas ul#menu-main-menu > li .submenu-inner.dropdown-menu li.active > a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-offcanvas-content a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-offcanvas-content .close-canvas a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-offcanvas-content #gva-mobile-menu ul.gva-mobile-menu > li.menu-item-has-children .caret:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.megamenu-main .widget.widget-html ul li strong {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-vertical-menu.widget > .widget-title {
   background-color: <?php echo esc_attr($theme_color) ?>;
}
 
 .row-gradient-darkblue {
   background-image: -webkit-radial-gradient(50% -50% farthest-corner, #07335f 0%, <?php echo esc_attr($theme_color) ?> 70%, <?php echo esc_attr($theme_color) ?> 100%);
   background-image: radial-gradient(farthest-corner at 50% -50%, #07335f 0%, <?php echo esc_attr($theme_color) ?> 70%, <?php echo esc_attr($theme_color) ?> 100%);
   background-color: <?php echo esc_attr($theme_color) ?>;
}
.column-style-4 .vc_column-inner {
   background: <?php echo esc_attr($theme_color) ?>;
}
.vc_progress_bar.gva-process .vc_general .vc_bar {
   background: <?php echo esc_attr($theme_color) ?>;
}
.vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tabs-container .vc_tta-tabs-list > li.vc_active:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.vc_general.vc_tta-tabs.vc_tta-tabs-position-top .vc_tta-tabs-list > li.vc_active a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.vc_general.vc_tta-tabs.vc_tta-tabs-position-top .vc_tta-tabs-list > li.vc_active a .vc_tta-icon {
   border-color: <?php echo esc_attr($theme_color) ?>;
}
.vc_tta.vc_tta-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.vc_toggle .vc_toggle_title:hover h4 {
   color: <?php echo esc_attr($theme_color) ?>;
}
.vc_toggle .vc_toggle_title .vc_toggle_icon {
   color: <?php echo esc_attr($theme_color) ?>;
}
.vc_toggle.vc_toggle_active .vc_toggle_title h4 {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gva-productscategory-navigation .widget-title {
   background: <?php echo esc_attr($theme_color) ?>;
}
 
 .gva-products-list .widget-title {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gva-social-links.style-v2 ul.socials > li > a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box .highlight-icon .icon-container {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box.icon-background .highlight-icon .icon-container.bg-theme:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box.icon-background.icon-border .highlight-icon .icon-container.bg-theme {
   border-color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box.icon-border:not(.icon-background) .highlight-icon .icon-container {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box.top-center.v2 {
   border: 1px solid <?php echo esc_attr($theme_color) ?>;
   border-top: 0;
}
.gsc-icon-box.top-center.v2:after, .gsc-icon-box.top-center.v2:before {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-icon-box.text-light .title a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-team .team-position {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-team.team-horizontal .team-header .social-list a:hover {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.gsc-team.team-horizontal .team-name:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-team.team-vertical .team-body .info {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-heading .title strong {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.gsc-heading .sub-title {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-heading.align-left .heading-top:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-heading.align-left-2 .heading-top:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-heading.style-3 {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-heading.style-3:after {
   border-top-color: <?php echo esc_attr($theme_color) ?>;
}
.post-small .post .cat-links a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.store-wrapper .hidden-caption:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.milestone-block.position-icon-top .milestone-icon {
   color: <?php echo esc_attr($theme_color) ?>;
}
.milestone-block.position-icon-top .milestone-icon span {
   color: <?php echo esc_attr($theme_color) ?>;
}
.milestone-block.position-icon-top-2 .milestone-icon {
   color: <?php echo esc_attr($theme_color) ?>;
}
.milestone-block.position-icon-top-2 .milestone-icon span {
   color: <?php echo esc_attr($theme_color) ?>;
}
.milestone-block.position-icon-left .milestone-icon span {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-image-content.style-3 .image:hover:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.pricing-table .content-wrap .plan-price .price-value .dollar {
   color: <?php echo esc_attr($theme_color) ?>;
}
.pricing-table .content-wrap .plan-price .price-value .value {
   color: <?php echo esc_attr($theme_color) ?>;
}
.pricing-table .plan-list ul li:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.pricing-table.highlight-plan .featured-label {
   background: <?php echo esc_attr($theme_color) ?>;
}
.box-card.box-card-left .highlight-icon .icon {
   color: <?php echo esc_attr($theme_color) ?>;
}
.box-card.box-card-right .highlight-icon .icon {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-call-to-action.button-bottom .title strong {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-call-to-action.button-bottom .title:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-call-to-action.button-center .title:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-call-to-action .video-body .gsc-video-link .icon-play {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-box-hover .backend {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-video-box .video-inner .gsc-video-link .icon-play {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-our-partners .content-inner .info .category {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-quotes-rotator .cbp-qtprogress {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-map .phone {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-tabs-content .carousel-nav .tab-carousel-nav .slick-slide .item a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-tabs-content .carousel-nav .tab-carousel-nav .slick-slide.slick-active.slick-center .item {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-tabs-content.text-light .carousel-nav .tab-carousel-nav .slick-slide.slick-active.slick-center .item a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-service-box .icon-inner .icon {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gsc-service-box .content-inner ul li:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-service-box .action a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-job-box .content-inner .job-type {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gsc-job-box .content-inner .information ul li i {
   color: <?php echo esc_attr($theme_color) ?>;
}
 
 .gsc-box-color {
   background: <?php echo esc_attr($theme_color) ?>;
}
.widget .widget-title:after, .widget .widgettitle:after, .widget .wpb_singleimage_heading:after, .wpb_single_image .widget-title:after, .wpb_single_image .widgettitle:after, .wpb_single_image .wpb_singleimage_heading:after, .wpb_content_element .widget-title:after, .wpb_content_element .widgettitle:after, .wpb_content_element .wpb_singleimage_heading:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
 
 .color-theme .widget-title, .color-theme .widgettitle {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.wp-sidebar ul li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #wp-footer .widget ul li a:hover, #wp-footer .wpb_single_image ul li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.widget_tag_cloud .tagcloud > a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.newsletter-form input.newsletter-submit {
   background: <?php echo esc_attr($theme_color) ?>;
}
.newsletter-form input.newsletter-submit:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.widget_rss > ul li .rss-date {
   color: <?php echo esc_attr($theme_color) ?>;
}
.opening-time .phone {
   color: <?php echo esc_attr($theme_color) ?>;
}
.info-shop .item a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.post .entry-meta .line {
   background: <?php echo esc_attr($theme_color) ?>;
}
.post .tag-links a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single.single-post #wp-content > article.post .content-top.entry-meta .line {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single.single-post #wp-content > article.post .post-content input[type="submit"] {
   background: <?php echo esc_attr($theme_color) ?>;
}
.post-navigation a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.event-block-list .event-image .event-date .date {
   color: <?php echo esc_attr($theme_color) ?>;
}
.event-block-list .event-line {
   background: <?php echo esc_attr($theme_color) ?>;
}
.event-block-list-small .event-date {
   background: <?php echo esc_attr($theme_color) ?>;
}
.event-block-list-small .event-address i {
   color: <?php echo esc_attr($theme_color) ?>;
}
.event-single .content-top.entry-meta .line {
   background: <?php echo esc_attr($theme_color) ?>;
}
.event-single .event-thumbnail .social-networks a:hover, .event-single .event-thumbnail .social-networks a:focus {
   color: <?php echo esc_attr($theme_color) ?>;
}
.event-single .meta-block .block-title:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.event-single .meta-block.speakers .speaker-item .job {
   color: <?php echo esc_attr($theme_color) ?>;
}
.portfolio-v1 .images .link:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.portfolio-v1 .content-inner .category a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.portfolio-item-v2 .images .category {
   background: <?php echo esc_attr($theme_color) ?>;
}
.portfolio-filter ul.nav-tabs > li > a.active {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-portfolio .portfolio-content .portfolio-information {
   background: <?php echo esc_attr($theme_color) ?>;
}
.give-block .form-image .content-action .link:hover {
   background: <?php echo esc_attr($theme_color) ?>;
   border-color: <?php echo esc_attr($theme_color) ?>;
}
.give-block .form-image .give-gallery-post a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block .form-image .give-video a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block .progress .progress-bar {
   background: <?php echo esc_attr($theme_color) ?>;
}
.give-block .form-content .campaign-information .funded .pie-label {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block-2 .give-image .give-gallery-post a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block-2 .give-image .give-video a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block-2 .give-content .action-content a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.give-block-3 .give-image .give-gallery-post a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.give-block-3 .give-image .give-video a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-2 .tab-carousel-nav .link-service i {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-2 .tab-carousel-nav .link-service .cat-links a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-2 .tab-carousel-nav .link-service:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-2 .tab-carousel-nav .slick-center .link-service {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-3 .tab-carousel-nav .link-service i {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-3 .tab-carousel-nav .link-service .cat-links a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-3 .tab-carousel-nav .link-service:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.gives-form-carousel-3 .tab-carousel-nav .slick-center .link-service {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .single-give-images .give-gallery-post a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .single-give-images .give-gallery-post a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .single-give-images .give-video a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .single-give-images .give-video a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .give-goal-progress .raised .income {
   color: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form .give-goal-progress .give-progress-bar span {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
.content-single-give-form form[id*=give-form].give-form .give-total-wrap .give-donation-amount .give-currency-symbol {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form form[id*=give-form].give-form .give-donation-levels-wrap li button.give-default-level, .content-single-give-form form[id*=give-form].give-form .give-donation-levels-wrap li button:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-single-give-form form[id*=give-form].give-form .give-btn-reveal {
   background: <?php echo esc_attr($theme_color) ?>;
}
.testimonail-slick-carousel .slick-slide .testimonial-node-center .testimonial-content .quote:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonail-slick-carousel .slick-slide .testimonial-node-center .testimonial-content .info .right .title {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonail-slick-carousel .slick-slide .testimonial-node-center .testimonial-video {
   background: <?php echo esc_attr($theme_color) ?>;
}
.testimonail-slick-carousel .slick-dots > li.slick-active button {
   background: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-node-1 .testimonial-content .quote:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-node-1 .testimonial-content .info .right .title {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-node-2 .testimonial-content .quote:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-node-2 .testimonial-content .info .right .title {
   color: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-node-2 .testimonial-video {
   background: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-grid .item-grid .testimonials-profile:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.testimonial-grid .item-grid .testimonials-profile .right .job {
   color: <?php echo esc_attr($theme_color) ?>;
}
.team-block.team-v1 .team-image .socials-team {
   background: <?php echo esc_attr($theme_color) ?>;
}
.team-block.team-v1 .team-body:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.team-block.team-v1 .team-skills .vc_single_bar .vc_bar {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
.team-block.team-v2 .team-content .socials-team a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.team-block.team-v2 .team-skills .vc_single_bar .vc_bar {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
.team-block-single .heading:after {
   background: <?php echo esc_attr($theme_color) ?>;
}
.team-block-single .team-skills .vc_bar {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
.single-blog .post-desc-wrapper .meta > div a {
   color: <?php echo esc_attr($theme_color) ?>;
}
 
 .pagination .disabled {
   background: <?php echo esc_attr($theme_color) ?>;
}
.pagination .current {
   background: <?php echo esc_attr($theme_color) ?>;
}
.wpcf7-form .action .wpcf7-submit {
   background: <?php echo esc_attr($theme_color) ?>;
}
.content-page-index .post-items article.post.sticky:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #comments #add_review_button,
 #comments #submit {
   background: <?php echo esc_attr($theme_color) ?>;
}
 #comments ol.comment-list .vcard .fn a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
 #comments ol.comment-list .comment-reply-link {
   color: <?php echo esc_attr($theme_color) ?>;
}
.custom-breadcrumb a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.title-layout-standard .custom-breadcrumb .breadcrumb-main .container .breadcrumb a:hover {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.owl-carousel .owl-nav > div:hover, .owl-carousel .owl-nav > div:focus, .flex-control-nav .owl-nav > div:hover, .flex-control-nav .owl-nav > div:focus {
   background: <?php echo esc_attr($theme_color) ?>;
}
.owl-carousel .owl-dots .owl-dot.active, .flex-control-nav .owl-dots .owl-dot.active {
   background: <?php echo esc_attr($theme_color) ?>;
}
.uk-slideset-init .uk-slideset-nav li a {
   border: 2px solid <?php echo esc_attr($theme_color) ?>;
}
.uk-slideset-init .uk-slideset-nav li.uk-active a {
   background: <?php echo esc_attr($theme_color) ?>;
}
 ul.nav-tabs > li > a:hover, ul.nav-tabs > li > a:focus, ul.nav-tabs > li > a:active {
   color: <?php echo esc_attr($theme_color) ?>;
}
 ul.nav-tabs > li.active > a {
   background: <?php echo esc_attr($theme_color) ?> !important;
}
 
 .btn-slider-white {
   color: <?php echo esc_attr($theme_color) ?>;
}
.btn-slider-white:hover, .btn-slider-white:focus, .btn-slider-white:active {
   background: <?php echo esc_attr($theme_color) ?>;
}

 .woocommerce-tabs .nav-tabs > li.active > a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce-tab-product-info .submit {
   background: <?php echo esc_attr($theme_color) ?>;
}
.minibasket.light i {
   color: <?php echo esc_attr($theme_color) ?>;
}
 table.variations a.reset_variations {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.single-product .social-networks > li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-product .image_frame .woocommerce-product-gallery__trigger:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .image_frame .onsale {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .image_frame .flex-control-nav .owl-item img.flex-active {
   border: 1px solid <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-main.product-type-grouped table.group_table tr td.label a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-product .entry-summary .woocommerce-product-rating .woocommerce-review-link:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-product .entry-summary .price {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-inner .cart .button, .single-product .product-single-inner .add-cart .button {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-inner .yith-wcwl-add-to-wishlist a:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-inner a.compare:hover {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-inner form.cart .table-product-group td.label a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product-single-inner form.cart .add-cart button {
   background: <?php echo esc_attr($theme_color) ?>;
}
.single-product .product_meta > span a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce-info a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul > li.is-active a {
   color: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce #breadcrumb a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce-page .content-page-inner input.button, .woocommerce-page .content-page-inner a.button {
   background: <?php echo esc_attr($theme_color) ?>;
}
.woocommerce-cart-form__contents .woocommerce-cart-form__cart-item td.product-remove a.remove {
   background: <?php echo esc_attr($theme_color) ?>;
}
.shop-loop-title a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.shop-loop-actions .quickview a:hover, .shop-loop-actions .yith-wcwl-add-to-wishlist a:hover, .shop-loop-actions .yith-compare a:hover, .shop-loop-actions .add-to-cart a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.shop-loop-actions .quickview a:hover:after, .shop-loop-actions .yith-wcwl-add-to-wishlist a:hover:after, .shop-loop-actions .yith-compare a:hover:after, .shop-loop-actions .add-to-cart a:hover:after {
   color: <?php echo esc_attr($theme_color) ?>;
}
.product_list_widget .minicart-close:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.product_list_widget.cart_list .widget-product .remove {
   background: <?php echo esc_attr($theme_color) ?>;
}
.woo-display-mode > a:hover, .woo-display-mode > a:active, .woo-display-mode > a:focus, .woo-display-mode > a.active {
   background: <?php echo esc_attr($theme_color) ?>;
}
.filter-sidebar .filter-sidebar-inner.layout-offcavas .filter-close {
   background: <?php echo esc_attr($theme_color) ?>;
}
.widget.widget_layered_nav ul > li a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
.widget.widget_product_categories li.current-cat > a {
   color: <?php echo esc_attr($theme_color) ?> !important;
}
.widget.widget_product_categories ul.product-categories > li.has-sub .cat-caret:hover {
   cursor: pointer;
   color: <?php echo esc_attr($theme_color) ?>;
}
.widget.widget_product_categories ul.product-categories > li ul a:hover {
   color: <?php echo esc_attr($theme_color) ?>;
}
<?php } //End Color Theme ?> 

<?php /* ----- Style Color Theme Second ---- */ ?>
<?php if( !empty($theme_color_second) ){ ?>
.bg-theme-2 {
   background: <?php echo esc_attr($theme_color_second) ?> !important;
}
.text-theme-2 {
   color: <?php echo esc_attr($theme_color_second) ?> !important;
}
.btn-inline:hover {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.btn-inline:hover:after {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.gsc-call-to-action.button-right-2 {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.gsc-box-hover .backend .link-action a:hover {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.gsc-box-hover .backend .link-action a:hover:after {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.gsc-service-box .action a {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.event-block .event-image .date {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.give-block .form-content .campaign-information .campaign-goal {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.give-block-2 .campaign-information .campaign-goal {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.give-block-3 .campaign-information .campaign-goal {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.gives-form-carousel-2 .tab-carousel-nav .link-service:after {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.gives-form-carousel-3 .tab-carousel-nav .link-service:after {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.content-single-give-form .give-goal-progress .raised .goal-text {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
.single-product .product-single-inner .cart .button:hover, .single-product .product-single-inner .add-cart .button:hover {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.single-product .product-single-inner .yith-wcwl-add-to-wishlist a {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.single-product .product-single-inner a.compare {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.single-product .product-single-inner form.cart .add-cart button:hover {
   background: <?php echo esc_attr($theme_color_second) ?>;
}
.gva-countdown .countdown-times > div.day {
   color: <?php echo esc_attr($theme_color_second) ?>;
}
<?php } //End Color Theme Second ?> 


<?php

      $styles = ob_get_clean();
      
      $styles = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $styles );
      
      $styles = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '   ', '    ' ), '', $styles );

      if($styles){
         wp_enqueue_style( 'kunco-custom-style-color', KUNCO_THEMER_DIR . '/css/custom_script.css');
         wp_add_inline_style( 'kunco-custom-style-color', $styles );
      }

   }
}

add_action( 'wp_enqueue_scripts', 'kunco_custom_color_theme', 99999 );