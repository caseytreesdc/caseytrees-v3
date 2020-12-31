<!-- Renders a Single Page -->
<?php get_header(); ?> 
<h2>page.php</h2>
<?php 
            the_post();
            the_title();
            the_content();
    
?>
<? get_footer(); ?>