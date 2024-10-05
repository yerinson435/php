<?php

// $estudiantes = array('Carlos', 'Jose', 'Maria', 'Luis');
$estudiantes = ['Carlos', 'Jose', 'Maria', 'Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];

$aprendiz = [
  'nombre' => 'Yerinson',
  'apellido' => 'Suarez',
  'edad' => '17',
  'deudas' => '14.000.00'
];

echo "<hr>";

echo "<pre>";
print_r($aprendiz);
echo "</pre>";

$tutor = [
  'nombre' => 'Yerinson Stiven',
  'apellido' => 'Suarez Florez',
  'edad' => '17',
  'direccion' => [
    'ciudad' => 'Bucaramanga',
    'barrio' => 'Morro Rico',
    'nomenclatura' => 'calle 16 54c24',
    'zipcode' => 666554
  ],
  'habilidades' => [
    'git', 'html', 'css', 'js', 'php', 'python', 'slq'
  ]
];

echo "<hr>";

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<pre>";
print_r ($tutor ['direccion']['nomenclatura']);
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r ($tutor ['habilidades'][4]);
echo "</pre>";

$tutor['habilidades'][3] = 'JavaScrip';

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<hr>";

$tutor['direccion']['departamento'] = 'santander';

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<hr>";

unset($tutor ['habilidades'][4]);

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<hr>";

