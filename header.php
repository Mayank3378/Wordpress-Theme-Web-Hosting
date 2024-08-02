<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php do_action( 'wdes_seo' ); ?>

	<?php echo wdes_header()->favicon(); ?>

    <!-- wp-head -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); echo wdes_header()->get_pattern(); ?> >

<?php wp_body_open(); ?>

<div class="layout-width <?php echo wdes_header()->layout(); ?>">

<?php do_action( 'wdes_header_after_body_open' ) ?>
