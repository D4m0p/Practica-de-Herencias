<?php
// problema3_error.php - Muestra el error fatal que da PHP al heredar de una clase final

// Se activa la salida de errores para que el mensaje se vea en la página
ini_set('display_errors', '1');
error_reporting(E_ALL);

echo '<p><a href="problema3.php">Volver al Problema #3</a></p>';
echo '<p>Al cargar el archivo con la herencia prohibida, PHP responde:</p>';

// El error aparece aquí: PHP revisa el archivo completo antes de ejecutarlo
// y se detiene al ver que cocheDeLujo extiende una clase final
require 'clases/HerenciaProhibida.php';

echo 'Esta línea nunca se ejecuta.';
