<?php 
/**
 * Plugin Name: GaviasFramework
 * Description: Open Setting, Post Type, Shortcode ... for theme 
 * Version: 1.2.4
 * Author: Gaviasthemes Team
 */

define( 'GAVIAS_THEMER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'GAVIAS_THEMER_PLUGIN_DIR', plugin_dir_path( __FILE__ )  );

class Gavias_Themer{

	public function __construct(){
		$this->load_language_file();
		$this->include_files();
		add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
      add_action('wp_head', array($this, 'gaviasframework_ajax_url'));
		$this->load_posttypes(); 
      $this->gavias_plugin_update();
	}
	
	public function gaviasframework_ajax_url(){
	    echo '<script> var ajaxurl = "' . admin_url('admin-ajax.php') . '";</script>';
	}
	public function load_language_file(){
		load_plugin_textdomain('gaviasframework', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}
	
	public function include_files(){
		require_once('posttypes/brand.php');
		require_once('posttypes/testimonials.php');
		require_once('posttypes/footer.php');
      require_once('posttypes/megamenu.php');
		require_once('posttypes/lesson.php');
      require_once('redux/admin-init.php');
		require_once('shortcodes.php');

		require_once('import/import-widget.php');
		require_once('import/import-slider.php');
      require_once('import/import.php');

      require_once('includes/function.php');
	}


	public function load_posttypes(){
		$opts = apply_filters( 'gaviasthemer_load_post_types', get_option( 'gaviasthemer_active_post_types' ) );
      if( !empty($opts) ){
         foreach( $opts as $opt => $key ){
            $file = str_replace( 'actived_', '', $opt );
            $filepath = GAVIAS_THEMER_PLUGIN_DIR.'posttypes/'.$file.'.php'; 
            if( file_exists($filepath) ){
               require_once( $filepath );
            }
         }  
      }
	} 

	public function register_scripts(){
		$js_dir = plugin_dir_url( __FILE__ ).'js';
		wp_register_script('gavias.themer', $js_dir.'/gavias.themer.js', array('jquery'), null, true);
		wp_enqueue_script('gavias.themer');
	}

   public function gavias_plugin_update() {
      require 'plugin-update/plugin-update-checker.php';
      Puc_v4_Factory::buildUpdateChecker(
         'http://gaviasthemes.com/plugins/dummy_data/gaviasframework-update-plugin.json',
         __FILE__,
         'gaviasframework'
      );
   }
}

new Gavias_Themer();