<?php
get_header();
?>

    <div class="container content">

<?php the_post(); ?>

    <div class="row">
        <div class="col-md-8">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php
get_footer();
?>
