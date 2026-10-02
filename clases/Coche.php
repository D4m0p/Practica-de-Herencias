<?php
// clases/Coche.php - Clase base del Problema #1

class Coche
{
    // protected: la propiedad se puede usar en esta clase y en las que hereden de ella
    protected $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function printCaracteristicas()
    {
        // En el enunciado decía $this->getColor sin paréntesis; así PHP busca una
        // propiedad que no existe. Para llamar al método hacen falta los paréntesis
        echo 'Color: ' . $this->getColor();
    }
}
