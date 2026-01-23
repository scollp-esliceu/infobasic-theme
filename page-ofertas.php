<?php
    get_header();

?>

<h1 class="ofertas-title">Las ofertas de hoy</h1>
    <?php
            while(have_posts()){
                the_post();
                ?>
                <p><?=the_content()?></p>

            <?php
            }
        ?>

<?php
    get_footer();

?>