<?php
// clases/Persona.php - Clase base del Problema #5

class Persona
{
    // Datos generales que comparten el estudiante y el docente
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getFechaNacimiento(): string
    {
        return $this->fechaNacimiento;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
