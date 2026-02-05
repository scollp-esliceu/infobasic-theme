<?php
    get_header();

?>

    <div class="jumbotron jumbo-tienda">
        <h1 class="tienda-titol">Compra tu ropa Online</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card tenda-card">
                    <img src="<?=get_theme_file_uri("uploads/camisetas.jpg")?>" alt="" srcset="">
                    <div class="card-body">
                        <h5>Camisetes a mesura</h5>
                        <a href="/camisetas" class="btn btn-primary">Visita</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card tenda-card">
                    <img src="<?=get_theme_file_uri("uploads/tejanos.jpg")?>" alt="" srcset="">
                                        <div class="card-body">
                        <h5>Texants a mesura</h5>
                        <a href="/tejanos" class="btn btn-primary">Visita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    get_footer();

?>