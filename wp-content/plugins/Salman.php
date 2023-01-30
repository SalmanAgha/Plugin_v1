<?php
/*

Plugin Name: Salman
Plugin URI: www.keplerx.co
Description: First Plugin From Salman
Author: Salman Agha
Version: 1.0 
*/

register_activation_hook('__FILE__','Salman_Plugin_Activation');
register_deactivation_hook('__FILE__','Salman_Plugin_Deactivation');

function Salman_Plugin_Activation(){
	echo "Plugin Activated";
}

function Salman_Plugin_Deactivation(){
	echo "Plugin Deactivated";
}


?>
