<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
        <?php drk_post_title(); ?>
        <?php drk_post_meta(); ?>
    </header>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
</article>
