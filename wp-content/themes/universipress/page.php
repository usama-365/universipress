<?php get_header(); ?>
<h1>These are list of pages</h1>
<?php
while (have_posts()) {
    the_post();
    ?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_content(); ?></p>
    <hr>
    <?php
}
get_footer();