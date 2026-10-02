<?php
// problema4.php - Área y perímetro de un círculo con la clase Circulo
require_once 'clases/Circulo.php';

$error = '';
$miCirculo = null;

// Si no se ha enviado el formulario se usa el radio 4 del ejemplo
$datoRadio = trim($_GET['radio'] ?? '4');

// FILTER_VALIDATE_FLOAT rechaza el texto que no sea un número
$radio = filter_var($datoRadio, FILTER_VALIDATE_FLOAT);
if ($radio === false) {
    $error = 'El radio debe ser un número.';
} else {
    try {
        $miCirculo = new Circulo($radio);
    } catch (InvalidArgumentException $excepcion) {
        // La propia clase rechaza el radio cero o negativo
        $error = $excepcion->getMessage();
    }
}

$tituloPagina = 'Problema #4 - Clase Circulo';
include 'includes/header.php';
?>
        <h1 class="h3">Problema #4 - Área y perímetro de un círculo</h1>

        <div class="row g-3 mb-3">
            <div class="col-md-5">
                <form method="get" action="problema4.php" class="card shadow-sm">
                    <div class="card-body">
                        <label for="radio" class="form-label fw-semibold">Radio del círculo:</label>
                        <input type="number" class="form-control mb-3" id="radio" name="radio" step="any" min="0.01"
                               placeholder="Ej.: 4" value="<?php echo htmlspecialchars($datoRadio); ?>" required>
                        <button type="submit" class="btn btn-primary w-100">Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <?php if ($error !== ''): ?>
                    <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error); ?></div>
                <?php else: ?>
                    <div class="card shadow-sm">
                        <div class="card-header fw-semibold">Resultado</div>
                        <div class="card-body">
                            <!-- number_format($numero, decimales, separador_decimal, separador_miles) -->
                            <p class="mb-1">Radio: <strong><?php echo number_format($miCirculo->getRadio(), 2, '.', ','); ?></strong></p>
                            <p class="mb-1">Área del círculo: <strong><?php echo number_format($miCirculo->calcularArea(), 2, '.', ','); ?></strong></p>
                            <p class="mb-0">Perímetro del círculo: <strong><?php echo number_format($miCirculo->calcularPerimetro(), 2, '.', ','); ?></strong></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php
        mostrarCodigo('clases/Circulo.php');
        mostrarCodigo('problema4.php');
        ?>

<?php include 'includes/footer.php'; ?>
