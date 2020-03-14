<?php
// Função para display do titulo de um post
function drk_post_title() {

    $before = '<h1 class="' . get_post_type() . '-title">';
    $after = '</h1>';

    if( !is_singular() || !is_single() ) {
        $before = '<a href="' . get_the_permalink() . '"><h2 class="' . get_post_type() . '-title">';
        $after = '</h2></a>';
    }

    the_title( $before, $after );

}

// Função para display de dados do post ou pagina
function drk_post_meta( $echo = true ) {

    $post_date = get_the_date();
    $post_time = get_the_time();
    $post_author = get_the_author();
    $post_edit_link = drk_edit_post_link( ' | ' . __( 'Edit' ) );

    $text = __( 'Posted in %1$s at %2$s, by %3$s', 'drktwenty' );

    if( get_post_type() == 'attachment' ) {
        $text = __( 'Uploaded on %1$s at %2$s, by %3$s', 'drktwenty' );
    }

    $output = '<p class="post-meta">';
    $output .= sprintf(
        $text,
        $post_date,
        $post_time,
        $post_author
    );
    $output .= $post_edit_link . '</p>';

    if( $echo ) {
        echo $output;
    } else {
        return $output;
    }

}

// Função para display do link de edição do post ( return | void )
function drk_edit_post_link( $text = null, $before = '', $after = '', $id = 0, $class = 'post-edit-link' ) {
    $post = get_post( $id );
    if ( ! $post ) {
        return;
    }

    $url = get_edit_post_link( $post->ID );
    if ( ! $url ) {
        return;
    }

    if ( null === $text ) {
        $text = __( 'Edit This' );
    }

    $link = '<a class="' . esc_attr( $class ) . '" href="' . esc_url( $url ) . '">' . $text . '</a>';
    
    return $before . apply_filters( 'edit_post_link', $link, $post->ID, $text ) . $after;
}
