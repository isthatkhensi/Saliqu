<?php get_header(); ?>

<div class="container">
    <div class="main-content__single">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            
                <div class="main-content__single">
                    <div class="post-cat"><?php the_category(); ?></div>
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <p class="post-date"><?php echo get_the_date("F j, Y"); ?></p>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="single-post-thumbnail"> 
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="single-post-content">
                            <?php the_content(); ?>
                        </div>
                    <div class="lower-meta">
                        <p class="author"><span>by</span> <?php the_author(); ?></p>
                        <div class="socials">
                            <ul>
                                <li><i class='bx bxl-facebook'></i></li>
                                <li><i class='bx bxl-twitter' ></i></li>
                                <li><i class='bx bxl-pinterest' ></i></li>
                                <li><i class='bx bxl-google-plus-circle'></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
    </div>
</div>
            <?php comments_template(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?> 

