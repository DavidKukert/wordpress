<?php
get_header();
?>
<div class="content-primary full-width">
    <header class="page-header">
        <h1 class="page-title">
            <?php _e( 'Nothing found', 'drktwenty' ); ?><br />
            <span class="page-description"><?php echo get_search_query(); ?></span>
        </h1>
        <hr class='page-div' />
        <hr class='page-div' />
    </header><!-- .page-header -->

    <div class="page-content">
        <p>
            <?php _e( 'Nothing found', 'drktwenty' ); ?>
            <?php _e( 'Go back to the home page by', 'drktwenty' ); ?>
            <?php echo ' '; ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'clicking here', 'drktwenty' ) ?></a>.
        </p>
    </div>
</div>
<?php
get_footer();
