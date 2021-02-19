<?php
/* Template Name: Contact*/
?>

<?php get_header(); ?>
<section id="contact-sec">
    <div id="container">
        <?php the_post_thumbnail(); ?>
        <div id="background"></div>
        <div class="contact-form">
            <h2>Get in touch</h2>
            <hr/>
            <p> If you want to receive any further information, you can fill out the form below</p>
            <form action="<?php the_permalink(); ?>" method="post">
                <input type="text" name="name" id="name" placeholder="Name" value="<?php echo esc_attr($_POST['name']); ?>" required>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
                <input type="tel" name="subject" id="subject" placeholder="Subject" value="<?php echo esc_attr($_POST['subject']); ?>" required>
                <div id="message-box">
                    <textarea name="message" id="message" placeholder="Message" rows="2"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                </div>
                <button id="submit">Submit</button>
              </form>
        </div>
    </div>   
</section>

<?php get_footer(); ?> 