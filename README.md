# Problemas a Resolver - Programación Orientada a Objetos en PHP

Prácticas de clases, herencia, métodos estáticos y clases `final` en PHP.
Materia: Desarrollo Web - Grupo 1S3122 - Instructora: Irina Fong
Módulo III: Programación de Aplicaciones Web - II Semestre 2026

## Contenido

- `index.php` - Página de inicio con el enlace a cada problema
- `problema1.php` + `clases/Coche.php` y `clases/CocheDeLujo.php` - **Problema #1**: herencia
  con `extends`; la clase hija agrega los extras y sobrescribe `printCaracteristicas()`
- `problema2.php` - **Problema #2**: Late Static Binding. Corre el mismo ejemplo con
  `static::` y con `self::` y compara los resultados
- `problema3.php` + `problema3_error.php` y `clases/HerenciaProhibida.php` - **Problema #3**:
  una clase `final` no puede heredarse; la segunda página muestra el error fatal de PHP
- `problema4.php` + `clases/Circulo.php` - **Problema #4**: clase que calcula el área y el
  perímetro de un círculo, con un formulario para cambiar el radio
- `problema5.php` + `clases/Persona.php`, `clases/Estudiante.php` y `clases/Docente.php` -
  **Problema #5**: `Persona` como clase base de `Estudiante` y `Docente`
- `includes/header.php` e `includes/footer.php` - Menú y pie de página comunes

Cada página muestra el resultado y permite desplegar el código fuente que lo produce.

## Resultados

| Problema | Resultado |
| --- | --- |
| #1 | `Color: negro` y `Extras: TV` para el CocheDeLujo |
| #2 | Con `static::` se muestra la clase hija; con `self::`, la clase padre |
| #3 | `Fatal error: Class cocheDeLujo cannot extend final class Coche` |
| #4 | Con radio 4: área 50.27 y perímetro 25.13 |
| #5 | Datos del estudiante y del docente, con los heredados de `Persona` |

## Notas

- En el Problema #1 el enunciado llamaba a `$this->getColor` sin paréntesis; se corrigió a
  `$this->getColor()` para que llame al método.
- En el Problema #2 la versión con `self::` usa las clases `A2` y `B2`, porque PHP no
  permite declarar dos veces la clase `A` en el mismo archivo.
- El error del Problema #3 es de compilación y no se puede atrapar con `try/catch`; por
  eso la herencia prohibida está en un archivo aparte.
- En el Problema #4 la clase rechaza el radio cero o negativo con una excepción.

## Requisitos

- PHP 8.
- Conexión a internet, porque Bootstrap se carga desde un CDN.

## Cómo ejecutarlo

1. Abrir una terminal dentro de la carpeta del proyecto.
2. Levantar el servidor: `php -S localhost:8000`
3. Abrir en el navegador `http://localhost:8000/`

Con WAMP o XAMPP: copiar la carpeta dentro de `www` o `htdocs`.

## Autor

David Moreno - Universidad Tecnológica de Panamá
