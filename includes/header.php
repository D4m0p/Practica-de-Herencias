<?php
// includes/header.php - Cabecera común con el menú de los problemas
$paginaActual = basename($_SERVER['PHP_SELF']);
$tituloPagina = $tituloPagina ?? 'Problemas a Resolver';

$menu = [
    'problema1.php' => 'Problema #1',
    'problema2.php' => 'Problema #2',
    'problema3.php' => 'Problema #3',
    'problema4.php' => 'Problema #4',
    'problema5.php' => 'Problema #5',
];

// Muestra el código fuente de un archivo, coloreado, dentro de un bloque desplegable
function mostrarCodigo($archivo)
{
    echo '<details class="mb-3"><summary class="small text-secondary">Ver código: ' . htmlspecialchars($archivo) . '</summary>';
    echo '<div class="border rounded bg-white p-3 mt-2 small overflow-auto">';
    highlight_file(__DIR__ . '/../' . $archivo);
    echo '</div></details>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tituloPagina); ?></title>
    <meta name="description" content="Prácticas de programación orientada a objetos en PHP">
    <meta name="author" content="Universidad Tecnológica de Panamá / David Moreno">
    <meta name="robots" content="noindex, nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">POO en PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal"
                        aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar el menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuPrincipal">
                    <ul class="navbar-nav ms-auto">
                        <?php foreach ($menu as $archivo => $nombre): ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $paginaActual == $archivo ? 'active' : ''; ?>" href="<?php echo $archivo; ?>"><?php echo $nombre; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4">
