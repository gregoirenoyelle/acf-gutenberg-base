<?php

// Ajouter un bloc pour les pages
function gn_acf_bloc_gutenberg_page() {
	// https://www.advancedcustomfields.com/resources/acf_register_block/
	// vérifie si la bonne version ACF. Dans le cas contraire tout s'arrête
	if ( ! function_exists('acf_register_block') )
		return;

	// Enregistrement du bloc
	acf_register_block(array(
		'name' => 'recette',
		'title' => 'Recette',
		'render_callback' => 'gn_acf_bloc_recette_callack',
		'category' => 'formatting',
		'icon' => 'dashicons-carrot',
		'mode' => 'edit',
		'post_types' => array('page'),
		'keywords' => array('profile', 'user', 'author')
	));
}
add_action('acf/init', 'gn_acf_bloc_gutenberg_page');


// Affichage des templates
function gn_acf_bloc_recette_callack() {
	// Variables
	$img_id = (int) get_field('blocrecet_photo_de_la_recette');
	$img = wp_get_attachment_image( $img_id, 'large' );
	$recette = get_field('blocrecet_recette');
	$titre_recette = get_field('blocrecet_titre_de_la_recette');

	ob_start();
	// __DIR__ pour partir du dossier racine
	include( plugin_dir_path( __DIR__ ) . 'view/view-bloc-recette.php' );
	echo ob_get_clean();


}