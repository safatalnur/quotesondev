<?php
/**
 * Template Name: Submit a quotes
 */
?>



<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<section class="submit-form">
    <div class="left-awesome">
        <i class="fas fa-quote-left"></i>
    </div>

    <form class="form-solution">
        
        <div class="form-header">
            <h2><?php the_title(); ?></h2>
        </div>

        <div class="form-author">
            <label for="author">Author of Quote</label>
            <input type="text" id="form-author" name="author">
        </div>

        <div class="form-quote">
            <label for="quote">Quote</label>
            <input type="quote" id="form-quote" name="quote">
        </div>

        <div class="form-source">
            <label for="source">Where did you find this quote? (e.g. book name)</label>
            <input type="source" id="form-source" name="source">
        </div>

        <div class="form-URL">
            <label for="URL">Provide the URL of the quote source, if available</label>
            <input type="URL" id="form-URL" name="URL">
        </div>

        <div class="input-button">
            <input type="button" value="Submit Quote">
        </div>


    </form>

    <div class="right-awesome">
            <i class="fas fa-quote-right"></i>
    </div>
        
</section>




        <!-- <?php the_content(); ?> -->
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>