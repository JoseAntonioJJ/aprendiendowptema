<footer class="site-footer contenedor">
    <hr>
    <div class="contenido-footer">
                <?php 
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container'      => 'nav',
                        'container_class'=> 'menu-principal'
                    );
                    wp_nav_menu( $args );
                ?>
                <p class="copyright">Aviso legal <?php echo date('Y').' '.get_bloginfo('name');?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
