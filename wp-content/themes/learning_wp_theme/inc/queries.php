<?php
function agendadehoy_lista_eventos() {
    ?>
    <ul class="lista-clases">
        <?php 
         $args = array(
            'post_type' => 'agendadehoy_eventos',
            'posts_per_page' => 10
         );
         $eventos = new WP_Query($args);
         while ( $eventos->have_posts()):
               $eventos->the_post();
        ?>
        <li>
            <h1><?php the_title(); ?></h1>
            <p>El evento empieza <?php the_field('fecha_inicio_evento') ?></p>
        </li>
        <?php 
        endwhile; 
        wp_reset_postdata();
        ?>
    </ul>

    <?php
};