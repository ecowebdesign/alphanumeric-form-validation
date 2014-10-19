<?php
/* 
Plugin Name: Alphanumeric Jquery Validation 
Plugin URI: 
Description: This plugin integrates jquery validation
Author: Ernests Drungils
Version: 0.1
Author URI: http://ecowebdesign.eu
*/
function my_scripts_method() {
 wp_enqueue_script('custom-script', plugins_url('alphanumeric/js/jquery.alphanum.js'), array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
/*********************************/
// Include the validation script snippet
function start_alphanumeric_script(){
	if ( is_page(array( 618, 853 )) ) /* Replace with your page ID's -  this will load snippet only on registration pages */ { ?> 
    <script type="text/javascript">
    jQuery(document).ready(function(){	
   // validates field #s2member-pro-paypal-checkout-first-name for numeric only input
   jQuery('#s2member-pro-paypal-checkout-first-name').alpha({
   allowLatin         : true, // a-z A-Z
   allowOtherCharSets : false // eg ? ? Arabic, Chinese etc); 
	});  
   // validates field #s2member-pro-paypal-checkout-last-name for numeric only input
   jQuery('#s2member-pro-paypal-checkout-last-name').alpha({
   allowLatin         : true, // a-z A-Z
   allowOtherCharSets : false // eg ? ? Arabic, Chinese etc); 
	});
  // alter span text for First name  
  jQuery( document ).ready(function( $ ) {
  jQuery('.s2member-pro-paypal-form-first-name-div span').html('<strong>First name *  </strong> - please use only latin characters');
});	
  // alter span text for Last name  
jQuery( document ).ready(function( $ ) {
  jQuery('.s2member-pro-paypal-form-last-name-div span').html('<strong>Last name *  </strong>  - please use only latin characters');
});	
    });
    </script>
<?php }
}
// include start_alphanumeric_script code before the closing head tag
add_action('wp_head', 'start_alphanumeric_script');
?>