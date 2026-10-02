<?php
// clases/Circulo.php - Clase del Problema #4

class Circulo
{
    private float $radio;

    public function __construct(float $radio)
    {
        // Un círculo con radio cero o negativo no existe
        if ($radio <= 0) {
            throw new InvalidArgumentException('El radio debe ser un número mayor que cero.');
        }
        $this->radio = $radio;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }

    // Área = pi * radio al cuadrado. M_PI es la constante de PHP con el valor de pi
    public function calcularArea(): float
    {
        return M_PI * ($this->radio * $this->radio);
    }

    // Perímetro = 2 * pi * radio
    public function calcularPerimetro(): float
    {
        return 2 * M_PI * $this->radio;
    }
}
