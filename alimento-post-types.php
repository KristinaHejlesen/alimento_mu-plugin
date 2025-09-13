<?php function blog_post_types()
{

    // Blog post types _ Vi øver os i at lave post-types, man kunne sagtens bare anvend post i wordpress!
    //husk register_post_type('blog', = navnet på single-blog.php skal være det samme
    register_post_type('blog', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'blog'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Blogs',
            'add_new_item' => 'Add New Blog',
            'edit_item' => 'Edit Blog',
            'all_items' => "All Blogs",
            'singular_name' => 'Blog'

        ),
        'menu_icon' => 'dashicons-admin-customizer'
    ));
}
//vi kalder funktionen blog_post_types
add_action('init', 'blog_post_types');
