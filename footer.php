    
    <footer>
        <div class="container">
            <div class="col-md-6">
                <p>Ves al inicio</p>
                <a href="home">Tienda</a>
            </div>
            <div class="col-md-3">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'infobasic_intern',
                        ) );
                        ?>
            </div>
            <div class="col-md-3">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'infobasic_extern',
                        ) );
                        ?>
            </div>
        </div>
    </footer>

    
    <?php wp_footer();?>
</body>

</html>