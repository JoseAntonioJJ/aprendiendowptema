<?php get_header();?>

<main class="contenedor pagina seccion">
<div class="contenido-principal">
    <?php get_template_part('template-parts/loop-paginas'); ?>
    <?php agendadehoy_lista_eventos(); ?>
</div>

</main>
<?php get_footer();?>