<?php

/**
 * Script creado para la tarea 5 del modulo de DAW del curso 2023/2024
 * 
 * Este script contiene cuatro funciones documentadas con DocBlocks para generar 
 * la documentacion con PHPDocumentor.
 *
 * @author Daniel Rodriguez Barranco
 * @version 1.0
 */

/**
 * Función para sumar dos números.
 *
 * Esta función recibe dos números y devuelve su suma.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int La suma de los dos números.
 */
function sumar($a, $b) {
    return $a + $b;
}
/**
 * Función para restar dos números.
 *
 * Esta función recibe dos números y devuelve su diferencia
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int La diferencia de los dos números.
 */
function restar($a, $b) {
    return $a - $b;
}
/**
 * Función para multiplicar dos números.
 *
 * Esta función recibe dos números y devuelve su producto.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 * @return int El producto de los dos números.
 */
function multiplicar($a, $b) {
    return $a * $b;
}

// Ejemplo de uso de las funciones
echo "La suma de 2 y 5 es: " . sumar(2, 5) . "\n";
echo "La diferencia de 9 y 6 es: " . restar(9, 6) . "\n";
echo "El producto de 4 y 5 es: " . multiplicar(4, 5) . "\n";

/**
 * Funcion interna que devuelve la versión de PHP en formato de cadena.
 *
 * Esta función devuelve la versión de PHP instalada en el servidor.
 * 
 * @internal Esta función es solo para uso interno y no puede ser llamada directamente por los usuarios finales.
 * 
 * @return string La versión de PHP en formato de cadena.
 */
function obtenerVersionPHP() {
    return phpversion();
}
