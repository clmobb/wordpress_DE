<?php
get_header();

$args_comment_form = array(
    'title_reply' => 'Leave a Message',
    'comment_notes_before' => '<div style="margin-bottom:1em">Ihre Email wird nicht gezeigt. * = Pflichtpfeld</div>',
    'comment_notes_after' => '',

    'fields' => apply_filters( 'comment_form_default_fields', array(
        'author' =>
            '<div class="form-group">
            <input id="author" name="author" class="form-control" type="text" placeholder="Your Name *" value="' . esc_attr( $commenter['comment_author'] ) .
            '"' . $aria_req . ' /></div>',

            'email' =>
                '<div class="form-group">
                <input id="email" name="email" class="form-control" type="text" placeholder="Your Email *" value="' . esc_attr( $commenter['comment_author_email'] ) .
                '"' . $aria_req . ' /></div>',

            'url' =>
                '<div class="form-group">
                <input id="url" name="url" class="form-control" type="text" placeholder="Your Website" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '"' . $aria_req . ' /></div>'

             )
        ),
    'comment_field' => '<textarea id="comment" class="form-control" rows="9" name="comment" aria-required="true"></textarea><br />',

    );
?>

    <div class="container content">

<?php the_post(); ?> <!-- Beitrag wird vorbereitet-->

    <div class="row">
        <div class="col-md-8">
            <h1><?php the_title(); ?></h1>
            <div class="meta">
                <?php the_date(); ?><br />
                Von: <?php the_author_link(); ?><br />
                <?php the_tags('Schlagwörter: ',' &bull; '); ?><br />
                Kategorie: <?php the_category('&bull;'); ?>
            </div>
            <?php the_content(); ?>
            <?php comment_form( $args_comment_form ); ?>
            <?php comments_template(); ?>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php
get_footer();
?>

