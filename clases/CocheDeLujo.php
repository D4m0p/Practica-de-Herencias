<?php
// clases/CocheDeLujo.php - Clase hija del Problema #1
require_once __DIR__ . '/Coche.php';

// extends: CocheDeLujo hereda las propiedades y los métodos de Coche
class CocheDeLujo extends Coche
{
    protected $extras;

    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    // Sobrescribe el método del padre: además del color muestra los extras
    public function printCaracteristicas()
    {
        // $color es protected en Coche, por eso se puede leer desde la clase hija
        echo 'Color: ' . $this->color;
        echo '<hr/>';
        echo 'Extras: ' . $this->extras;
    }
}
