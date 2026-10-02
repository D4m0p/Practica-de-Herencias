<?php
// clases/Docente.php - Clase hija de Persona (Problema #5)
require_once __DIR__ . '/Persona.php';

class Docente extends Persona
{
    // Datos exclusivos de su rol como profesor
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $tituloAcademico;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $tituloAcademico,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->tituloAcademico = $tituloAcademico;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string
    {
        return $this->codigoDocente;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    // Titular, Adjunto, Especial o Interino
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    // Su grado de estudio más alto: Licenciado, Magíster o Doctor
    public function getTituloAcademico(): string
    {
        return $this->tituloAcademico;
    }

    // Tiempo Completo, Tiempo Parcial o por horas
    public function getTipoContratacion(): string
    {
        return $this->tipoContratacion;
    }
}
