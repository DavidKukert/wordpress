<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if( has_post_thumbnail() ):
        the_post_thumbnail(
            'large',
            array(
                'class' =>  'post-thumbnail'
            )
        );
    endif;
    ?>
    <header class="post-header">
        <?php drk_post_title(); ?>
        <?php drk_post_meta(); ?>
    </header>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>
