<?php
// index.php - Inicio con el enlace a cada problema
$tituloPagina = 'Problemas a Resolver - POO en PHP';
include 'includes/header.php';

$problemas = [
    'problema1.php' => ['Problema #1', 'Herencia: la clase CocheDeLujo extiende a Coche y sobrescribe un método.'],
    'problema2.php' => ['Problema #2', 'Late Static Binding: diferencia entre llamar con static:: y con self::.'],
    'problema3.php' => ['Problema #3', 'Clases final: cómo impedir que una clase pueda heredarse.'],
    'problema4.php' => ['Problema #4', 'Clase Circulo que calcula el área y el perímetro.'],
    'problema5.php' => ['Problema #5', 'Persona como clase base de Estudiante y Docente.'],
];
?>
        <h1 class="h3 mb-1">Problemas a Resolver</h1>
        <p class="text-secondary">Prácticas de programación orientada a objetos en PHP.</p>

        <div class="list-group shadow-sm">
            <?php foreach ($problemas as $archivo => [$nombre, $detalle]): ?>
                <a href="<?php echo $archivo; ?>" class="list-group-item list-group-item-action">
                    <span class="fw-semibold"><?php echo $nombre; ?></span><br>
                    <span class="small text-secondary"><?php echo $detalle; ?></span>
                </a>
            <?php endforeach; ?>
        </div>

<?php include 'includes/footer.php'; ?>
