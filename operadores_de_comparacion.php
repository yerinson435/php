<?php

/**
 * -----  Ejemplo          Simbolo                  Resultado
 *        1 == "1"         == (igual)               True
 *        10 == "10"       === (identico)           False
 *        7 != 7           != (diferente)           False
 *        21 <> '21'       <> (diferente)           False
 *        19 !== 21        !== (no identico)        True
 *        7 < 4            < (menor que)            False
 *        7 > 4            > (mayor que)            True
 *        2 <- 2           <= (menor o igual que)   True
 *        3 <- 7           >= (meyor o igual que)   Falso
**/

var_dump(2 == "2");
echo "<br>";
var_dump(2 === "2");