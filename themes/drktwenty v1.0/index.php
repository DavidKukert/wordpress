<?php
get_header();
?>
<div class="content-primary">
    <?php
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content/' . get_post_type(), get_post_format() );
        }
    } else {

    }
    ?>
</div>
<?php
get_sidebar();
get_footer();
