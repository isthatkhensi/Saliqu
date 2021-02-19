<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
<nav>
    <div class="nav-logo">
        <p><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
    <?php
        $args = array(
            'theme_location' => 'primary'
        );
    ?>
    <?php wp_nav_menu($args); ?>

    <!-- Top Naigation Social Media Links -->
    <div class="socials">
        <ul>
            <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram-alt'></i></a></li>
            <li><a href="https://twitter.com/"><i class='bx bxl-twitter'></i></a></li>
            <li><a href="https://pinterest.com/"><i class='bx bxl-pinterest'></i></a></li>
            <li><a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a></li>
        </ul>
    </div>
</nav>