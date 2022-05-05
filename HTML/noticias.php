<?php include('Include/Headder.php') ?>
<title>Noticias</title>

<!-- Tabs navs -->
<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs bg-secondary" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active fw-bold text-dark" id="home-tab" data-bs-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="home" aria-selected="true">
            Noticia 1
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link fw-bold text-dark" id="profile-tab" data-bs-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="profile" aria-selected="false">
            Noticia 2
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link fw-bold text-dark" id="contact-tab" data-bs-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="contact" aria-selected="false">
            Noticia 3
        </a>
    </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 85%;">
            <iframe src="https://elpais.com/mexico/2022-04-04/la-mina-de-criptomonedas-que-opero-por-mas-de-un-ano-en-un-colegio-estatal-en-mexico.html" title="Noticia 1"></iframe>
        </div>
        <div class="card text-center border-success mb-3">
            <div class="card-header">
                <p class="fw-bold text-dark">Comentario</p>
            </div>
            <div class="card-body align-text-justify">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed hic voluptate, atque magnam omnis vitae ab laborum aliquam, dolor minus natus obcaecati dolore labore sit nobis repellendus consectetur, mollitia ad. Perferendis doloremque cum corrupti? Quasi dolores dolor aut quaerat omnis? Saepe minus nesciunt placeat assumenda nisi cumque ducimus, enim dolores.</p>
            </div>
            <div class="card-footer text-muted">
                05/05/2022
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 85%;">
            <iframe src="https://www.forbes.com.mx/negocios-mexico-primer-lugar-en-ciberataques-en-latinoamerica/" title="Noticia 2"></iframe>
        </div>
        <div class="card text-center border-success mb-3">
            <div class="card-header">
                <p class="fw-bold text-dark">Comentario</p>
            </div>
            <div class="card-body align-text-justify">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed hic voluptate, atque magnam omnis vitae ab laborum aliquam, dolor minus natus obcaecati dolore labore sit nobis repellendus consectetur, mollitia ad. Perferendis doloremque cum corrupti? Quasi dolores dolor aut quaerat omnis? Saepe minus nesciunt placeat assumenda nisi cumque ducimus, enim dolores.</p>
            </div>
            <div class="card-footer text-muted">
                05/05/2022
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 85%;">
            <iframe src="https://www.elespanol.com/omicrono/software/20220112/hackeo-carcel-sin-camaras-seguridad-celdas-bloqueadas/641935817_0.html" title="Noticia 3"></iframe>
        </div>
        <div class="card text-center border-success mb-3">
            <div class="card-header">
                <p class="fw-bold text-dark">Comentario</p>
            </div>
            <div class="card-body align-text-justify">
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed hic voluptate, atque magnam omnis vitae ab laborum aliquam, dolor minus natus obcaecati dolore labore sit nobis repellendus consectetur, mollitia ad. Perferendis doloremque cum corrupti? Quasi dolores dolor aut quaerat omnis? Saepe minus nesciunt placeat assumenda nisi cumque ducimus, enim dolores.</p>
            </div>
            <div class="card-footer text-muted">
                05/05/2022
            </div>
        </div>
    </div>
</div>
<?php //include('Include/en_construccion.php') 
?>

<!-- Tabs content -->
<?php include('Include/Footer.php') ?>