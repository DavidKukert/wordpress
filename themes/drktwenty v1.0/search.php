<?php
get_header();
?>
<div class="content-primary full-width">
    <?php
    if( have_posts() ) {
    ?>
        <header class="page-header">
            <h1 class="page-title">
                <?php _e( 'Search results for:', 'drktwenty' ); ?>
                <span class="page-description"><?php echo get_search_query(); ?></span>
            </h1>
            <hr class='page-div' />
            <hr class='page-div' />
        </header><!-- .page-header -->
    <?php
        while( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content/' . get_post_type(), get_post_format() );
        }
    } else {
    ?>
        <header class="page-header">
            <h1 class="page-title">
                <?php _e( 'Nothing found when searching:', 'drktwenty' ); ?>
                <span class="page-description"><?php echo get_search_query(); ?></span>
            </h1>
            <hr class='page-div' />
            <hr class='page-div' />
        </header><!-- .page-header -->

        <div class="page-content">
            <p>
                <?php _e( 'Nothing found', 'drktwenty' ); ?>
                <?php _e( 'Try again in the search field below or go back to the home page by', 'drktwenty' ); ?>
                <?php echo ' '; ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'clicking here', 'drktwenty' ) ?></a>.
            </p>
        </div>

        <?php get_search_form(); ?>
    <?php
    }
    ?>
</div>
<?php
get_footer();
