<?php
// problema1.php - Herencia entre Coche y CocheDeLujo
require_once 'clases/CocheDeLujo.php';

$tituloPagina = 'Problema #1 - Herencia';
include 'includes/header.php';
?>
        <h1 class="h3">Problema #1 - Herencia</h1>
        <p><code>CocheDeLujo</code> extiende a <code>Coche</code>: hereda <code>setColor()</code> y
           <code>getColor()</code>, agrega los extras y sobrescribe <code>printCaracteristicas()</code>.</p>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header fw-semibold">Objeto CocheDeLujo</div>
                    <div class="card-body">
                        <?php
                        $miCoche = new CocheDeLujo();
                        $miCoche->setColor('negro');   // método heredado de Coche
                        $miCoche->setExtras('TV');     // método propio de CocheDeLujo
                        $miCoche->printCaracteristicas();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header fw-semibold">Objeto Coche</div>
                    <div class="card-body">
                        <?php
                        // El mismo método en la clase padre solo muestra el color
                        $otroCoche = new Coche();
                        $otroCoche->setColor('rojo');
                        $otroCoche->printCaracteristicas();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        mostrarCodigo('clases/Coche.php');
        mostrarCodigo('clases/CocheDeLujo.php');
        mostrarCodigo('problema1.php');
        ?>

<?php include 'includes/footer.php'; ?>
