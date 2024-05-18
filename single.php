<?php
/**
 * The template for displaying all single posts
 *
 * @package YourTheme
 */

 wp_head();
 get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="post-meta">
                <p>Published on: <?php echo get_the_date(); ?></p>
                <p>Author: <?php the_author(); ?></p>
                <p>Categories: <?php the_category(', '); ?></p>
                <p>Tags: <?php the_tags('', ', ', ''); ?></p>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <hr>
            <div class="post-navigation">
                <div class="prev-post">
                    <?php previous_post_link('%link', '← Previous Post'); ?>
                </div>
                <div class="next-post">
                    <?php next_post_link('%link', 'Next Post →'); ?>
                </div>
            </div>
        <?php endwhile;
    else : ?>
        <p>No post found.</p>
    <?php endif; ?>

    <hr>

    <h2>Related Posts</h2>
    <ul>
        <?php
        $related_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID()),
            'category__in' => wp_get_post_categories(get_the_ID())
        ));

        if ($related_posts->have_posts()) :
            while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                </li>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No related posts available.</p>
        <?php endif; ?>
    </ul>
</div>

<?php wp_footer(); ?>
<?php get_footer(); ?>
