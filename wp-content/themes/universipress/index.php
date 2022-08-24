<?php get_header(); ?>
<h1><?php bloginfo("name"); ?></h1>
<h2><?php bloginfo("description"); ?></h2>
<h3>Posts</h3>
<?php
while (have_posts()) {
    the_post();
    ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_content(); ?></p>
    <hr>
    <?php
}
get_footer();