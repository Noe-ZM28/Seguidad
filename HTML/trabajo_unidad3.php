<?php include('Include/Headder.php') ?>
<title>Trabajo de Unidad 3</title>

<div class="card text-center">
    <h5 class="card-header fw-bold text-dark">Fecha de envio de trabajo: martes, 12 de abril de 2022, 17:01</h5>
    <div class="card-body">
        <div class="ratio ratio-1x1" style="--bs-aspect-ratio: 100%;">
            <iframe src="../Files/ZuñigaN-16.pdf" title="Document 3° unit"></iframe>
        </div>
    </div>
</div>
<script>
    async function main() {
        const doc = await PDFNet.PDFDoc.createFromURL("../Files/ZuñigaN-16.pdf");
        d.lock();
        d.lock();
        d.lockRead();
    }
    PDFNet.runWithCleanup(main);
</script>
<?php include('Include/Footer.php') ?>