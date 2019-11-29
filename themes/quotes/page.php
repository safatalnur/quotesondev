<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    

    <section class="page-about">
        <div class="left-awesome">
            <i class="fas fa-quote-left"></i>
        </div>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="right-awesome">
            <i class="fas fa-quote-right"></i>
        </div>
    </section>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>