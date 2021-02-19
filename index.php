<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    
    <h1><?php bloginfo('name'); ?></h1>

    <nav class="main-nav">
        <div class="container">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </nav>
    


    <div class="main">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?> 
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <!-- have to echo date for it to show on all posts -->
                <p> Created By <?php the_author(); ?> on <?php echo get_the_date('F j, Y'); ?></p>
                <?php if(has_post_thumbnail()) : ?>
                    <div class="post-thumbnail"> 
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <?php the_excerpt(); ?>
                <a class="button" href="<?php the_permalink(); ?>">
                    Read More
                </a>
        <?php endwhile; ?>
        <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
         <?php endif; ?>
         </div>

<footer>
    <p>&copy; <?php echo get_the_date('Y');?> - <?php bloginfo('name'); ?></p>
</footer>
</body>
</html>