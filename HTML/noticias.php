<?php include('Include/Headder.php') ?>
<title>Noticias</title>

<!-- Tabs navs -->
<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="home" aria-selected="true">
            Noticia 1
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="profile" aria-selected="false">
            Noticia 2
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="contact" aria-selected="false">
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
    </div>
    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 85%;">
            <iframe src="https://www.forbes.com.mx/negocios-mexico-primer-lugar-en-ciberataques-en-latinoamerica/" title="Noticia 2"></iframe>
        </div>
    </div>
    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 85%;">
            <iframe src="https://www.elespanol.com/omicrono/software/20220112/hackeo-carcel-sin-camaras-seguridad-celdas-bloqueadas/641935817_0.html" title="Noticia 3"></iframe>
        </div>
    </div>
</div>
<?php include('Include/en_construccion.php') ?>

<!-- Tabs content -->
<?php include('Include/Footer.php') ?>