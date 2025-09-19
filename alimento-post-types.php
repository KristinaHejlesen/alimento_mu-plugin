<?php function blog_post_types()
{

    // Blog post types _ Vi øver os i at lave post-types, man kunne sagtens bare anvend post i wordpress!
    //husk register_post_type('blog', = navnet på single-blog.php skal være det samme
    register_post_type('blog', array(
        //opfører sig ikke som posttype når det gælder vores plugin members, laver sin egen unikke tilladelser/egenskaber. per deault er denne sat til posts.
        'capability_type' => 'blog',
        // denne laves fordi, den giver wp besked om blog skal have tilladse til at give capability-type = blog
        'map_meta_cap' => true,
        'supports' => array('title', 'excerpt', 'thumbnail'),
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

    register_post_type('recipe', array(
        'capability_type' => 'recipe',
        'map_meta_cap' => true,
        'supports' => array('title', 'excerpt', 'thumbnail',),
        'rewrite' => array('slug' => 'recipe'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'recipe',
            'add_new_item' => 'Add New recipe',
            'edit_item' => 'Edit recipe',
            'all_items' => "All recipes",
            'singular_name' => 'recipe'

        ),
        'menu_icon' => 'dashicons-food'
    ));

    //evt skal vi lave en her til vores forfatter.
}
//vi kalder funktionen blog_post_types
add_action('init', 'blog_post_types');
