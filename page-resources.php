<?php
/*
    Template Name: Resources Page
 */

$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );

get_header();
?>

<!-- FEATURE IMAGE -->
<?php if( has_post_thumbnail() ) { ?>
    
    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

<?php } else { ?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>
    
<?php } ?>

<!-- MAIN CONTENTS -->
<div class="container">
    <div class="row" id="primary">

        <div id="content" class="col-sm-12">
            <section class="main-content">

                <?php while( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; ?>
                
                <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

                <hr/>

                <div class="resource-row clearfix">

                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                        <?php 
                            $resource_image     = get_field('resource_image');
                            $resource_url       = get_field('resource_url');
                            $button_text        = get_field('button_text');
                        ?>

                        <div class="resource">
                            <img src="<?php echo $resource_image[url]; ?>" alt="<?php echo $resource_image; ?>">
                            <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
                            <?php the_content(); ?>
                            <?php if( !empty($button_text) ) : ?>
                                <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </section>
        </div>

    </div>
</div>

<?php get_footer(); ?>