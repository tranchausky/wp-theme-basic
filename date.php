
<?php get_header(); 
echo '<h2>Date Page</h2>';
            while (have_posts()) : the_post(); 
            // echo the_title() . '<br/><br/>';
            ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            <?php
            endwhile;
            wp_reset_query();
get_footer();?>