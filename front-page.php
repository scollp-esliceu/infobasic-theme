<?php
    get_header();

?>
    <div class="index">
        <div class="titol-front jumbotron jumbo-front">
            <h1>Pàgina de benvinguda</h1>
        </div>
        <div class="tarjetes">
            <div class="card" style="width: 18rem;">
                <img src="<?=get_theme_file_uri("/uploads/camisetas.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BLOG</h5>
                    <p class="card-text">Visita el nostre blog per estar al dia!</p>
                    <a href="/blog" class="btn btn-primary">Visita ara!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?=get_theme_file_uri("/uploads/tienda.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tenda</h5>
                    <p class="card-text">Visita tots els nostres productes.</p>
                    <a href="/tienda" class="btn btn-primary">Visita ara!</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?=get_theme_file_uri("/uploads/tejanos.jpg")?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ofertes</h5>
                    <p class="card-text">Visita les ofertes que tenim avui!</p>
                    <a href="/ofertas" class="btn btn-primary">Visita ara!</a>
                </div>
            </div>
        </div>
    </div>
    
    
<?php
    get_footer();

?>