<?php
/**
 * Theme Name: 		Zona
 * Theme Author: 	Mariusz Rek - Rascals Themes
 * Theme URI: 		http://rascalsthemes.com/zona
 * Author URI: 		http://rascalsthemes.com
 * File:			content-page.php
 * =========================================================================================================================================
 *
 * @package zona
 * @since 1.0.0
 */
?>

<?php 
   $zona_opts = zona_opts();
?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_content( esc_html__( '...View the rest of this post', 'zona' ) ); ?>

	<?php
		wp_link_pages( array(
			'before' 	=> '<div class="page-links">' . esc_html__( 'Jump to Page', 'zona' ),
			'after' 	=> '</div>',
		) );
	?>

</article>