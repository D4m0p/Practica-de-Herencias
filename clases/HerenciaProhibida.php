<?php
// clases/HerenciaProhibida.php - Este archivo falla a propósito (Problema #3)

final class Coche
{
    public function getColor()
    {
        echo 'Rojo';
    }
}

class cocheDeLujo extends Coche
{
    // Error Fatal, Clase no heredada.
}
