<?php
// problema5.php - Persona como clase base de Estudiante y Docente
require_once 'clases/Estudiante.php';
require_once 'clases/Docente.php';

$miEstudiante = new Estudiante(
    '8-988-123', // código de estudiante
    3.5,         // índice académico
    2023,        // cohorte
    1,           // estado académico (1 = activo)
    2,           // modalidad de estudio (2 = virtual)
    'Juan',      // nombre
    'Pérez',     // apellido
    '2000-05-15' // fecha de nacimiento
);

$miDocente = new Docente(
    'D-0457',                    // código de docente
    'Departamento de Computación', // departamento
    'Titular',                   // categoría
    'Magíster',                  // máximo título académico
    'Tiempo Completo',           // tipo de contratación
    'Ana',                       // nombre
    'González',                  // apellido
    '1980-03-22'                 // fecha de nacimiento
);

// Los tres primeros datos de cada lista salen de métodos heredados de Persona
$datosEstudiante = [
    'Nombre' => $miEstudiante->getNombre(),
    'Apellido' => $miEstudiante->getApellido(),
    'Fecha de nacimiento' => $miEstudiante->getFechaNacimiento(),
    'Código de estudiante' => $miEstudiante->getCodigoEstudiante(),
    'Índice académico' => number_format($miEstudiante->getIndiceAcademico(), 2),
    'Cohorte' => $miEstudiante->getCohorte(),
    'Estado académico' => $miEstudiante->getEstadoAcademico() . ' - ' . $miEstudiante->getEstadoAcademicoTexto(),
    'Modalidad de estudio' => $miEstudiante->getModalidadEstudio() . ' - ' . $miEstudiante->getModalidadEstudioTexto(),
];

$datosDocente = [
    'Nombre' => $miDocente->getNombre(),
    'Apellido' => $miDocente->getApellido(),
    'Fecha de nacimiento' => $miDocente->getFechaNacimiento(),
    'Código de docente' => $miDocente->getCodigoDocente(),
    'Departamento' => $miDocente->getDepartamento(),
    'Categoría' => $miDocente->getCategoria(),
    'Máximo título académico' => $miDocente->getTituloAcademico(),
    'Tipo de contratación' => $miDocente->getTipoContratacion(),
];

$tituloPagina = 'Problema #5 - Persona, Estudiante y Docente';
include 'includes/header.php';
?>
        <h1 class="h3">Problema #5 - Persona, Estudiante y Docente</h1>
        <p><code>Estudiante</code> y <code>Docente</code> heredan de <code>Persona</code> el nombre, el apellido
           y la fecha de nacimiento; cada una agrega solo los datos de su rol.</p>

        <div class="row g-3 mb-3">
            <?php foreach (['Estudiante' => $datosEstudiante, 'Docente' => $datosDocente] as $rol => $datos): ?>
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header fw-semibold"><?php echo $rol; ?></div>
                        <ul class="list-group list-group-flush">
                            <?php $posicion = 0; ?>
                            <?php foreach ($datos as $etiqueta => $valor): ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>
                                        <?php echo htmlspecialchars($etiqueta); ?>
                                        <?php if ($posicion < 3): ?>
                                            <span class="badge text-bg-secondary">Persona</span>
                                        <?php endif; ?>
                                    </span>
                                    <strong class="text-end"><?php echo htmlspecialchars($valor); ?></strong>
                                </li>
                                <?php $posicion++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="small text-secondary">La etiqueta <span class="badge text-bg-secondary">Persona</span>
           marca los datos que vienen de la clase padre.</p>

        <h2 class="h5">¿Son también una Persona?</h2>
        <ul>
            <!-- instanceof confirma la herencia: el objeto hijo también cuenta como del tipo padre -->
            <li>$miEstudiante instanceof Persona: <strong><?php echo $miEstudiante instanceof Persona ? 'Sí' : 'No'; ?></strong></li>
            <li>$miDocente instanceof Persona: <strong><?php echo $miDocente instanceof Persona ? 'Sí' : 'No'; ?></strong></li>
            <li>$miDocente instanceof Estudiante: <strong><?php echo $miDocente instanceof Estudiante ? 'Sí' : 'No'; ?></strong></li>
        </ul>

        <?php
        mostrarCodigo('clases/Persona.php');
        mostrarCodigo('clases/Estudiante.php');
        mostrarCodigo('clases/Docente.php');
        mostrarCodigo('problema5.php');
        ?>

<?php include 'includes/footer.php'; ?>
