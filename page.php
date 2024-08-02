<?php get_header(); ?>

<?php if ( x_wdes()->wdes_is_buider_edit_mode( get_the_ID() ) && !class_exists('Elementor')  ) : ?>

    <?php the_post(); the_content(); ?>

<?php else : ?>

    <?php
    if ( Phox\helpers::elementor_theme_builder('single') ):
        $template_name = wdes_header()->sdiebar_layout_show();

        if ( get_the_ID() === x_wdes()->get_bridge_page_id( 'int' ) ) :

            the_post();

            the_content();

        else : ?>
            <div class="blog-content">
                <div class="container">
                    <div class="row">
                        <div class="wide-posts-block">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div id="post-<?php the_ID() ?>" class="item-art inner-item-art single-no-feature-img" >

                                    <div class="text-area">
                                        <div class="body-article">

                                            <?php the_content(); ?>

                                            <?php if ( comments_open() || '0' != get_comments_number() ){comments_template(); } ?>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; // end of the loop. ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endif ?>
<?php endif; ?>


<?php get_footer(); ?>

