<?php get_header();

while (have_posts()) {
    the_post();
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image"
             style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title() ?></h1>
            <div class="page-banner__intro">
                <p>DON'T FORGET TO REPLACE ME LATER</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <?php
        $parent_id = wp_get_post_parent_id(get_the_ID());
        if ($parent_id) {
            ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parent_id) ?>"><i
                                class="fa fa-home" aria-hidden="true"></i> Back to
                        <?php echo get_the_title($parent_id) ?></a> <span
                            class="metabox__main"><?php the_title() ?></span>
                </p>
            </div>
            <?php
        }

        $children_page_ids = get_pages([
           'child_of' => get_the_ID()
        ]);
        if ($parent_id || $children_page_ids) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a
                            href="<?php get_the_permalink($parent_id) ?>"><?php echo get_the_title($parent_id) ?></a>
                </h2>
                <ul class="min-list">
                    <?php
                    $top_parent_id = get_the_ID();
                    if ($parent_id) {
                        $top_parent_id = $parent_id;
                    }
                    wp_list_pages([
                        'title_li' => null,
                        'child_of' => $top_parent_id
                    ]) ?>
                </ul>
            </div>
            <?php
        }
        ?>

        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
}
get_footer(); ?>