<?php

use Siler\{Twig, Http};

$model = [
  'message' => '¡Hola, mundo!',
  'path' => Http\path()
];

echo Twig\render('index.twig', $model);
