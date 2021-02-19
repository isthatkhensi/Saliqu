<?php
/* Template Name: About*/
?>

<?php get_header(); ?>
<section id="about-sec">
        <div id="container">
            <?php the_post_thumbnail(); ?>
            <div class="about-text">
                <h3 class="fancy-header">hey girl,</h3>
                <h5 class="title">I am <?php the_author_meta('display_name', 1); ?></h5> 
                <div class="about-para">
                    <?php the_content(); ?>
                </div>
                <p class="git-text"><a href="<?php echo site_url('/contact'); ?>">Get in touch</a></p>
            </div>
        </div>
    </section>
    

<?php get_footer(); ?> 