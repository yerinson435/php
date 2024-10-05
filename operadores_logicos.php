<?php

/**
 * --------- SIMBOLO --------- NOMBRE --------- 
 *             and             and(y)
 *             or              or(o)
 *             !               not (no)
 *             &&               and (y)
 *             ||               or (o)
 * 
 * 
 * --------- Table de operadores AND
 * EXPRECION 1          EXPRECION 2           RESULTADO
 * false         &&     false                 false
 * false         &&     true                  false
 * true          &&     true                  true
 * true          &&     false                 false
 * 
 */

$valor1 = 7;
$valor2 = 2;

var_dump($valor1 == 7 && 2 > 3);
echo "<br>";
var_dump($valor1 == 7 && 9 > 3);

/**
 * ---------Tabla de operador or
 *  exprecion 1     exprecion 2       resultado
 *  false    ||     false             false
 *  false    ||     true              true
 *  true     ||     flase             true
 *  true     ||     true              true
 */

var_dump($valor1 == 7 or 2 > 3);
echo "<br>";
var_dump($valor1 == 5 || 9 > 3);
echo "<br>";
var_dump($valor1 == 5 || 1 > 3);
