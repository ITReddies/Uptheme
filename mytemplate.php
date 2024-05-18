<?php

/**
 * Template Name: Blog Overview
 */

wp_head();

get_header(); ?>

<div class="container">

    <h1>Blog Overview</h1>
    <p>Welcome to my blog! Here you'll find a collection of articles, ideas, and updates on various topics.
        My aim is to provide valuable content that informs, inspires, and engages the readers. Explore my latest posts below.</p>

    <hr>

    <h2>Latest Posts</h2>
    <?php
    $recent_posts = new WP_Query(array(
        'posts_per_page' => 3,
    ));

    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <div class="post-overview">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_date(); ?></p>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
            <hr>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No recent posts available.</p>
    <?php endif; ?>

    <h2>Categories</h2>
    <ul>
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<li>' . $category->name . ' (' . $category->count . ' posts)</li>';
        }
        ?>
    </ul>

    <h2>Contact Me</h2>
    <p>Have questions or suggestions? Feel free to reach out to me at <a href="mailto:kontakt@ingo-reddies.com">kontakt@ingo-reddies.com</a>.</p>

</div>

<?php wp_footer(); ?>
<?php get_footer(); ?>