<?php
/**  A Category Template **/
get_header(); ?> 
 
 <div class="container">
    <div class="list-post-container">
    <h2 class="cat-page-title"> Category: <?php echo single_cat_title( '', false ); ?></h2>
    <h1 class="archive-title"> </h1>
        <?php if(have_posts()) : ?>
        <?php while(have_posts()): the_post(); ?> 
        <div class="post-block">
            <div class="post-img__container">
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumbnail"> 
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="post-text">
                    <h4 class="post__md-title"><a class="button" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="post-meta"><span class="post-date"><?php echo get_the_date("F j, Y"); ?></span>|<?php the_category(); ?></div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>                
                    </div>                        
                    <div class="post-btn"><a class="button" href="<?php the_permalink(); ?>">Read More</a></div>
            </div>      
        </div>           
        <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
        <?php endif; ?>
    </div>
</div>
 
 
<?php get_footer(); ?>