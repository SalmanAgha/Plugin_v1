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
	echo "Plugin Activatedss";
	global $wpdb;
	global $table_prefix;

	$tablename=$table_prefix.'salman_plugin';
	$Sql="CREATE TABLE `".$tablename."` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `".$tablename."`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `".$tablename."`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";

  echo $Sql;

$wpdb->query($Sql);





}

function Salman_Plugin_Deactivation(){
	echo "Plugin Deactivated";
}


?>
