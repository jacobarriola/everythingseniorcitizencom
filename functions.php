<?php

// Load parent style sheet
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// ACF form to create new 'listing' post

function new_listing_draft_post( $post_id )
{
    // check if this is to be a new post
    if( $post_id != 'new' )
    {
        return $post_id;
    }

    // Create a new post
    $post = array(
        'post_status'  => 'draft' ,
        'post_title'  => 'Title' ,
        'post_type'  => 'listing'
    );  

    // insert the post
    $post_id = wp_insert_post( $post ); 

    // update $_POST['return']
    $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );    

    // return the new ID
    return $post_id;
}

add_filter('acf/pre_save_post' , 'new_listing_draft_post' );



?>