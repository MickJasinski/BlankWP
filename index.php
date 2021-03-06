<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <!-- This brings up a post's title... -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!-- ..and this a content. -->
    <p><?php the_content(); ?></p>

    <?php endwhile;

    else:
        echo '<p>No content found</p>';

    endif;


    get_footer();

?>