<?php
/*
Plugin Name: ACF Blocs Recettes pour Gutenberg
Plugin URI: https://wwww.gregoirenoyelle.com
Description: Base d'extension pour les blocs Gutenberg avec ACF dans votre thème.
Version: 2.0
Author: Grégoire Noyelle
Author URI: http://wwww.gregoirenoyelle.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wp-plugin-name
*/


//* If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


/**************************
* LIENS FICHIER PHP
**************************/

//* Appel autres fichiers PHP
// Fichier de functions pour WordPress
// __FILE__ pour partir du fichier
include_once(plugin_dir_path( __FILE__ ) . 'lib/func-wordpress.php');
// Fichier de functions pour les blocs ACF
include_once(plugin_dir_path( __FILE__ ) . 'lib/func-acf.php');
// Fichier de fonction pour ajouter des enqueue
// include_once(plugin_dir_path( __FILE__ ) . 'lib/func.enqueue.php');

