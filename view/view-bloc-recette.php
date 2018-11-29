<?php
// Affichage bloc equipes
// Chargé depuis le fichier bloc-acf.php
?>
<section class="recette" style="border: 2px solid #888; padding: 2rem;">
	<h2><?php echo esc_html($titre_recette); ?></h2>
	<div class="photo"><?php echo $img ?></div>
	<div class="recette">
		<?php echo wp_kses_post($recette); ?>
	</div>
</section>
