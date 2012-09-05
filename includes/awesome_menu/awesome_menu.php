<?php 

//Add scripts		
	function _brentini_framework_load_menu_script()   {
		//wp_enqueue_script('_brentini_framework_jquery_menu', get_template_directory_uri() . '/includes/awesome_menu/js/jquery.nicemenu.js', '', '1.0', true);
		//wp_enqueue_script('_brentini_framework_mobile_menu', get_template_directory_uri() . '/includes/awesome_menu/js/jquery.mobilemenu.js', '', '1.0', true);
		//wp_enqueue_script('_brentini_framework_mobile_menu', get_template_directory_uri() . '/includes/awesome_menu/js/jquery.responsinav.js', '', '1.0', true);
      wp_enqueue_script('_brentini_framework_mobile_menu', get_template_directory_uri() . '/includes/awesome_menu/js/awesome_menu.js', '', '1.0', true);

	}
		add_action('wp_enqueue_scripts', '_brentini_framework_load_menu_script');

//Add  styles
    function _brentini_framework_add_menu_styles()  
    {  
		wp_register_style( '_brentini_menu_style', get_template_directory_uri() . '/includes/awesome_menu/css/screen.css', array(),'1.0', 'all' );  
        wp_enqueue_style( '_brentini_menu_style' );  
    }  
	add_action( 'wp_print_styles', '_brentini_framework_add_menu_styles' );  




// Add repsonsive menu script in footer
	function _brentini_add_menu_scripts_to_footer(){
{?>

<script>
$(function(){
    $(window).responsinav({ breakpoint: 800 });
});
</script>
	
<?php }}
	add_action('wp_footer', '_brentini_add_menu_scripts_to_footer');