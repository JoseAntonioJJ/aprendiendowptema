<?php get_header();?>
<?php 
    while (have_posts()):
        the_post();
        echo "<h1>".the_title()."</h1>";
        echo "<h1>".the_content()."</h1>";
    endwhile;    
?>
<?php get_footer();?>

