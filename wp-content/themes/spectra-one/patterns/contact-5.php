<?php
/**
 * Title: Teams three column
 * Slug: spectra-one/contact-5
 * Categories: contact
 * Keywords: teams three column
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/avatar-square-1.jpg",
    $get_url . "assets/image/avatar-square-2.jpg",
    $get_url . "assets/image/avatar-square-3.jpg",
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Meet the team', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'The talent driving our success', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"33%"}}}} -->
<p style="padding-right:33%"><?php esc_html_e( 'Meet our dedicated team of professionals who are passionate about providing top-notch service and delivering exceptional results.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":1209,"dimRatio":50,"minHeight":480,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1209" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Wade Warren', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Creative Director', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--x-small);margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $images[1] ); ?>","id":1208,"dimRatio":50,"minHeight":480,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1208" alt="" src="<?php echo esc_url( $images[1] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Leslie Alexander', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Product Manager', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--x-small);margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $images[2] ); ?>","id":1210,"dimRatio":50,"minHeight":480,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1210" alt="" src="<?php echo esc_url( $images[2] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"textColor":"white","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Esther Howard', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"white","fontSize":"x-small"} -->
<p class="has-white-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Senior Product Designer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--x-small);margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->