        </div><!-- / content -->

        <footer id="site-footer" class="footer">
            <div class="copyright">
                <p>&copy; 2020 &verbar; <?php bloginfo( 'name' ); ?> &verbar; <?php bloginfo( 'description' ); ?></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script>
            jQuery(document).ready(function($){
            // Target your .container, .wrapper, .post, etc.
                $(".is-type-video").fitVids();
            });
        </script>
    </body>
</html>
