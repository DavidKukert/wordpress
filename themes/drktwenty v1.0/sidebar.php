<div class="content-secondary">
    <?php // Dynamic Sidebar
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : 
        dynamic_sidebar( 'sidebar-1' );
    endif; // End Dynamic Sidebar sidebar-1 ?>
</div>
