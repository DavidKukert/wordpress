<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
        <header class="comments-area-header">
    		<h2 class="comments-title">
    			<?php
    			$comments_number = get_comments_number();
    			if ( '1' === $comments_number ) {
    				/* translators: %s: Post title. */
    				printf( _x( 'One Comment to &ldquo;%s&rdquo;', 'comments title', 'drktwenty' ), get_the_title() );
    			} else {
    				printf(
    					/* translators: 1: Number of comments, 2: Post title. */
    					_nx(
    						'%1$s Comment to &ldquo;%2$s&rdquo;',
    						'%1$s Comments to &ldquo;%2$s&rdquo;',
    						$comments_number,
    						'comments title',
    						'drktwenty'
    					),
    					number_format_i18n( $comments_number ),
    					get_the_title()
    				);
    			}
    			?>
    		</h2>
        </header>

        <div class="comment-area-content">
    		<div class="comment-list">
    			<?php
    				wp_list_comments(
    					array(
    						'avatar_size' => 100,
    						'style'       => 'div',
    						'short_ping'  => true,
    						'reply_text'  => __( 'Reply', 'drktwenty' ),
    					)
    				);
    			?>
    		</div>

            <?php
            the_comments_pagination(
    			array(
    				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'drktwenty' ) . '</span>',
    				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'drktwenty' ) . '</span>',
    			)
    		);
            ?>

        </div>

		<?php

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'drktwenty' ); ?></p>
		<?php
	endif;

	comment_form( array(
        'title_reply'   =>  __( 'Write a Reply or Comment', 'drktwenty' ),
    ) );
	?>

</div><!-- #comments -->
