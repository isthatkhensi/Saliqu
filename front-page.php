<?php get_header(); ?>

<div class="newsletter">
        <div class="newsletter__titles">
            <h4 class="title">Get on the List</h4>
            <p class="subtitle">Be the first to receive the latest buzz on upcoming contests.</p>
        </div>
        <div class="form">
            <form action="">
                <input type="email" class="email" name="email" placeholder="Email Address">
                <input type="submit" class="sub_btn" name="submit" value="Subscribe">
            </form>
        </div>
    </div>
    <div class="container">
        <!-- 5 recent posts -->
        <div class="left">
        <div id="recent-posts__homepage">
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
        <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
        <div class="right">
        <div id="sidebar">
            <?php if( is_active_sidebar('hp-sidebar')): ?>
                <?php dynamic_sidebar('hp-sidebar'); ?>
            <?php endif; ?>
            
        </div>
        </div>
            

    </div>
<?php get_footer(); ?>