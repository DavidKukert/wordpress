<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="attachment-header">
        <?php drk_post_title(); ?>
        <?php drk_post_meta(); ?>
    </header>
    <div class="attachment-content">
        <?php the_content(); ?>
    </div>
</article>
