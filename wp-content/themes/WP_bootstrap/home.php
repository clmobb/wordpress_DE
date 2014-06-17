<?php
get_header();
?>



<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

<?php
 $i=0;
$posts = get_posts( 'category=3' );
foreach ( $posts as $post ) : setup_postdata( $post);
?>

        <div class="item <?php if($i==0) echo 'active'; ?>">

            <?php if ( has_post_thumbnail() ) {
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
            ?>
            <img src="<?=$thumbnail[0];?>" alt="Generic placeholder image">
            <?php } ?>

             <div class="container">
                <div class="carousel-caption">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">weiterlesen</a></p>
                </div>
            </div>
        </div>
<?php
 $i++;
endforeach;
wp_reset_postdata();
?>

    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
<?php
$args = array(
    'posts_per_page'   => 3,
    'offset'           => 0,
    'category'         => 5,
    'orderby'          => 'post_date',
    'order'            => 'DESC',
    'include'          => '',
    'exclude'          => '',
    'meta_key'         => '',
    'meta_value'       => '',
    'post_type'        => 'post',
    'post_mime_type'   => '',
    'post_parent'      => '',
    'post_status'      => 'publish',
    'suppress_filters' => true );

$posts = get_posts( $args);
foreach ( $posts as $post ) : setup_postdata( $post);
?>

        <div class="col-lg-4">
            <?php if ( has_post_thumbnail() ) {
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
            ?>
            <img class="img-circle" src="<?=$thumbnail[0];?>" alt="Generic placeholder image">
            <?php } ?>
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?>.</p>
            <p><a class="btn btn-default" href="<?php the_permalink(); ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

<?php
endforeach;
wp_reset_postdata();
?>

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->


<?php
 $i=0;
$posts = get_posts( 'category=10' );
foreach ( $posts as $post ) : setup_postdata( $post);

    if($i%2 == 0) {
?>

        <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php the_title(); ?> <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">weiterlesen</a></p>
        </div>
        <div class="col-md-5">
            <?php if ( has_post_thumbnail() ) {
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
            ?>
            <img class="featurette-image img-responsive" src="<?=$thumbnail[0];?>" alt="Generic placeholder image">
            <?php } ?>
        </div>
    </div>
        <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-5">
            <?php if ( has_post_thumbnail() ) {
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                ?>
                <img class="featurette-image img-responsive" src="<?=$thumbnail[0];?>" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php the_title(); ?> <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">weiterlesen</a></p>
        </div>
    </div>



    <?php } ?>

<?php
 $i++;
endforeach;
wp_reset_postdata();
?>


    <!-- /END THE FEATURETTES -->

<?php
get_footer();
?>
