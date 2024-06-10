<?php
/**
 * Title: Author details
 * Slug: spectra-one/contact-9
 * Categories: contact
 * Keywords: author details
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/avatar-square-3.jpg",
];

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}},"border":{"radius":"6px","width":"1px"}},"borderColor":"outline"} -->
<div class="wp-block-columns alignwide has-border-color has-outline-border-color" style="border-width:1px;border-radius:6px"><!-- wp:column {"width":"33.33%","layout":{"type":"constrained"}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"align":"full","id":148,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-148"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Meet the owner', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Leslie Alexander', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Leslie loves exploring new foods, devouring motivational books, and hanging out with her loved ones. She\'s a real-life inspiration and proof that hard work and passion pay off!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-swt-separator-wide-thin-line"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-swt-separator-wide-thin-line"/>
<!-- /wp:separator -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->