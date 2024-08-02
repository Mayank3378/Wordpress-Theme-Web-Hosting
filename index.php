<?php

get_header();

if(have_posts()){

	$template_name = wdes_header()->sdiebar_layout_show();
	x_wdes()->wdes_get_tp( 'posts/layout', $template_name . '-sidebar' );

}else{

	x_wdes()->wdes_get_tp( 'not-found');

}

get_footer();


