<?php include('Include/Headder.php') ?>
<title>Noticias</title>

<div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title text-center">Advertencia</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <p class="title is-6">Nuestro sitio web no utiliza cookies, sin embargo la sección de noticias recopila articulos de diversas fuentes, si quieres continuar tendras que aceptar el uso de cookies de dichas fuentes.</p>
            <p class="title is-5 text-center">¿Quieres continuar?</p>
            <footer class="modal-card-foot">
                <button class="button is-danger is-medium is-fullwidth">Continuar</button>
                <button onclick="back_xd()" class="button is-success is-medium is-fullwidth">Regresar</button>
            </footer>
        </section>
    </div>
</div>

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
<div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="card text-center border-success mb-3">
                <div class="card-header">
                    <p class="fw-bold text-dark">Comentario</p>
                </div>
                <div class="card-body align-text-justify">
                    <p class="card-text">El minado de criptomodedas desde una institución pública parece, sinceramente, fantasía, pero con el pequeño instructivo que se lee al final, es claro que cosas así en realidad sí suceden.</p>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="ratio ratio-1x1"">
            <iframe src=" https://elpais.com/mexico/2022-04-04/la-mina-de-criptomonedas-que-opero-por-mas-de-un-ano-en-un-colegio-estatal-en-mexico.html" title="Noticia 1"></iframe>
        </div>

        <div class="card">
            <div class="card-header">
                <p class="fw-bold text-dark text-center">Referencia</p>
            </div>
            <div class="card-body">
                <p class="card-text align-text-justify">
                    María Julia Castañeda. (2022, April 4). EL PAÍS Edición México: el periódico global. El País México. https://elpais.com/mexico/2022-04-04/la-mina-de-criptomonedas-que-opero-por-mas-de-un-ano-en-un-colegio-estatal-en-mexico.html‌
                </p>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="card text-center border-success mb-3">
                <div class="card-header">
                    <p class="fw-bold text-dark">Comentario</p>
                </div>
                <div class="card-body align-text-justify">
                    <p class="card-text">El esquema hibrido fue el permitio que hubiera más ciberataques, no es como que no existieran pero estando en casa, relamente prestamos atención a los sitios en los que entramos o nos registramos y así es como permitimos que los atacantes entren a nuestros equipos.</p>
                </div>
                <div class="card-footer text-muted">
                    05/05/2022
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="ratio ratio-1x1"">
            <iframe src=" https://www.forbes.com.mx/negocios-mexico-primer-lugar-en-ciberataques-en-latinoamerica/" title="Noticia 2"></iframe>
        </div>
        <div class="card">
            <div class="card-header">
                <p class="fw-bold text-dark text-center">Referencia</p>
            </div>
            <div class="card-body">
                <p class="card-text align-text-justify">
                    Staff, F. (2021, November 30). México, primer lugar en ciberataques en Latinoamérica. Forbes México. https://www.forbes.com.mx/negocios-mexico-primer-lugar-en-ciberataques-en-latinoamerica/
                </p>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="card text-center border-success mb-3">
                <div class="card-header">
                    <p class="fw-bold text-dark">Comentario</p>
                </div>
                <div class="card-body align-text-justify">
                    <p class="card-text">Parece de pelicula. No solo compreometiron la seguridad de la carcel, también pudieron haber salido dañados los oficiales y pricioneros si hubieran llegado a haber riñas . Por suerte las lineas de emergiacia funcionaban, de no ser así el condado hubiera vivido situaciones extremas.</p>
                </div>
                <div class="card-footer text-muted">
                    09/05/2022
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="ratio ratio-1x1"">
            <iframe src=" https://www.elespanol.com/omicrono/software/20220112/hackeo-carcel-sin-camaras-seguridad-celdas-bloqueadas/641935817_0.html" title="Noticia 3"></iframe>
        </div>
        <div class="card">
            <div class="card-header">
                <p class="fw-bold text-dark text-center">Referencia</p>
            </div>
            <div class="card-body">
                <p class="card-text align-text-justify">
                    El español. (2022, January 12). Un hackeo deja a una cárcel sin cámaras de seguridad y con las celdas bloqueadas. El Español. https://www.elespanol.com/omicrono/software/20220112/hackeo-carcel-sin-camaras-seguridad-celdas-bloqueadas/641935817_0.html
                </p>
            </div>
        </div>
    </div>
</div>
<?php //include('Include/en_construccion.php') 
?>

<!-- Tabs content -->
<?php include('Include/Footer.php') ?>