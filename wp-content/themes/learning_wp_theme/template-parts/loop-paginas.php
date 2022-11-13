<?php 
    while (have_posts()):
    the_post();
?>
    <h1 class='text-center texto-primario'><?php the_title() ?></h1>

    <?php
        if(has_post_thumbnail()):
            the_post_thumbnail('blog1',array('class'=>'imagen-destacada'));
        endif;
    ?>
    
    <h1><?php the_content();?></h1>
<?php
    endwhile;    
?>