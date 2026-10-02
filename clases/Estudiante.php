<?php
// clases/Estudiante.php - Clase hija de Persona (Problema #5)
require_once __DIR__ . '/Persona.php';

class Estudiante extends Persona
{
    // Significado de los códigos numéricos
    const ESTADOS = [0 => 'Inactivo', 1 => 'Activo', 2 => 'Retirado', 3 => 'Graduado'];
    const MODALIDADES = [1 => 'Presencial', 2 => 'Virtual', 3 => 'Híbrida'];

    // Datos exclusivos de su vida como alumno dentro de la institución
    protected string $codigoEstudiante;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $codigoEstudiante,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        // parent::__construct() deja que Persona guarde los datos generales
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoEstudiante = $codigoEstudiante;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getCodigoEstudiante(): string
    {
        return $this->codigoEstudiante;
    }

    public function getIndiceAcademico(): float
    {
        return $this->indiceAcademico;
    }

    public function getCohorte(): int
    {
        return $this->cohorte;
    }

    public function getEstadoAcademico(): int
    {
        return $this->estadoAcademico;
    }

    public function getModalidadEstudio(): int
    {
        return $this->modalidadEstudio;
    }

    // Devuelven el texto que corresponde al código: 1 -> "Activo"
    public function getEstadoAcademicoTexto(): string
    {
        return self::ESTADOS[$this->estadoAcademico] ?? 'Desconocido';
    }

    public function getModalidadEstudioTexto(): string
    {
        return self::MODALIDADES[$this->modalidadEstudio] ?? 'Desconocida';
    }
}
