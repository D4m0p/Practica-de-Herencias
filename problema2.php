<?php
// problema2.php - Late Static Binding: static:: frente a self::

// --- Versión con static:: ---
class A
{
    public static function miFuncion()
    {
        // Mostrará el nombre de la clase actual
        echo __CLASS__;
    }

    public static function otraFuncion()
    {
        // static:: se resuelve al ejecutar, con la clase desde la que se hizo la llamada
        static::miFuncion();
    }
}

class B extends A
{
    public static function miFuncion()
    {
        echo __CLASS__;
    }
}

// --- Versión con self:: ---
// Las mismas clases con otro nombre, porque PHP no deja declarar dos veces la clase A
class A2
{
    public static function miFuncion()
    {
        echo __CLASS__;
    }

    public static function otraFuncion()
    {
        // self:: siempre apunta a la clase donde está escrito el método, que es A2
        self::miFuncion();
    }
}

class B2 extends A2
{
    public static function miFuncion()
    {
        echo __CLASS__;
    }
}

$tituloPagina = 'Problema #2 - Late Static Binding';
include 'includes/header.php';
?>
        <h1 class="h3">Problema #2 - Late Static Binding</h1>
        <p>En los dos casos se llama a <code>otraFuncion()</code>, que es un método de la clase padre,
           desde la clase hija. Lo único que cambia es si adentro se usa <code>static::</code> o <code>self::</code>.</p>

        <table class="table table-bordered bg-white shadow-sm align-middle">
            <thead class="table-dark">
                <tr><th>Llamada</th><th>Dentro de otraFuncion()</th><th>Resultado</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>B::otraFuncion()</code></td>
                    <td><code>static::miFuncion()</code></td>
                    <td class="fw-bold text-success"><?php B::otraFuncion(); ?></td>
                </tr>
                <tr>
                    <td><code>B2::otraFuncion()</code></td>
                    <td><code>self::miFuncion()</code></td>
                    <td class="fw-bold text-danger"><?php B2::otraFuncion(); ?></td>
                </tr>
            </tbody>
        </table>

        <h2 class="h5">Revisión de los resultados</h2>
        <ul>
            <li><strong>Con <code>static::</code> sale B.</strong> PHP espera hasta la ejecución para decidir a qué
                clase pertenece la llamada. Como se llamó desde B, usa el <code>miFuncion()</code> de B.</li>
            <li><strong>Con <code>self::</code> sale A2 (la clase padre).</strong> <code>self</code> queda fijo en la
                clase donde se escribió el método, sin importar desde cuál clase se llame. Por eso ignora
                el <code>miFuncion()</code> que la hija sobrescribió.</li>
            <li>Si se quiere que un método del padre respete lo que sobrescriben las clases hijas, se debe usar
                <code>static::</code>.</li>
        </ul>

        <?php mostrarCodigo('problema2.php'); ?>

<?php include 'includes/footer.php'; ?>
