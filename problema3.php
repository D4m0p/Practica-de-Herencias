<?php
// problema3.php - Impedir que una clase pueda heredarse con final

// final delante de class: ninguna otra clase puede extenderla
final class Coche
{
    public function getColor()
    {
        echo 'Rojo';
    }
}

// La clase final se usa de forma normal; lo único prohibido es heredar de ella
$miCoche = new Coche();

// ReflectionClass permite preguntarle a PHP si la clase es final
$esFinal = (new ReflectionClass('Coche'))->isFinal();

$tituloPagina = 'Problema #3 - Clases final';
include 'includes/header.php';
?>
        <h1 class="h3">Problema #3 - Impedir que la clase pueda heredarse</h1>
        <p>La palabra <code>final</code> delante de <code>class</code> impide que otra clase la extienda.</p>

        <div class="card shadow-sm mb-3">
            <div class="card-header fw-semibold">La clase final sí se puede usar</div>
            <div class="card-body">
                <p class="mb-1">Color del coche: <strong><?php $miCoche->getColor(); ?></strong></p>
                <p class="mb-0">¿La clase Coche es final? <strong><?php echo $esFinal ? 'Sí' : 'No'; ?></strong></p>
            </div>
        </div>

        <div class="card shadow-sm mb-3 border-danger">
            <div class="card-header fw-semibold text-danger">Al intentar heredarla</div>
            <div class="card-body">
                <p>El archivo <code>clases/HerenciaProhibida.php</code> declara <code>class cocheDeLujo extends Coche</code>.
                   PHP lo rechaza antes de ejecutar una sola línea, con un error fatal que no se puede
                   atrapar con <code>try/catch</code>; por eso está en un archivo aparte.</p>
                <a href="problema3_error.php" class="btn btn-outline-danger btn-sm">Ver el error fatal</a>
            </div>
        </div>

        <?php
        mostrarCodigo('problema3.php');
        mostrarCodigo('clases/HerenciaProhibida.php');
        mostrarCodigo('problema3_error.php');
        ?>

<?php include 'includes/footer.php'; ?>
