<?php
/**
 * Template Name: Full Width Template
 * Template Post Type: post, page
 */
get_header();
?>
<div class="content-primary full-width">
    <?php
    while( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content/' . get_post_type(), get_post_format() );
    }
    if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
        comments_template();
	}
    ?>
</div>
<?php
get_footer();
