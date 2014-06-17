<?php

/*
Template Name: Kontaktseite
*/

get_header();
?>

    <div class="container content">

<?php the_post(); ?>

    <div class="row">

        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160843.97426970853!2d6.967322349999988!3d50.95724494999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf259169ab2fe5%3A0x42760fc4a2a77f0!2zS8O2bG4!5e0!3m2!1sde!2sde!4v1402361139458" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>

    </div>

<?php
get_footer();
?>
