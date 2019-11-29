<?php get_header(); ?>

<?php if( have_posts() ) :?>

<section id="quotes-content">


<!-- //The WordPress Loop: loads post content  -->
<?php   while( have_posts() ) :
        the_post(); ?>
        
    
    <section class="center-part">
        <div class="left-awesome">
            <i class="fas fa-quote-left"></i>
        </div>


    <?php the_content(); ?>
    <!-- <h2><?php the_title(); ?></h2> -->

        <div class="right-awesome">
            <i class="fas fa-quote-right"></i>
        </div>
    </section>
        <div id="content-ignore">
    <h3><?php the_permalink();?></h3>
    </div>
    <?php echo get_post_meta( get_the_ID(), '_qod_quote_source', true);?>
    <?php echo get_post_meta( get_the_ID(), '_qod_quote_source_url', true);?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

</section>
    <div class="btn">
        <button id="quote-button">Show me Another</button>
    </div>
    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>