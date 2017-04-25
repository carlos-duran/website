<?php

use Siler\Twig;

$model = [
  'message' => '¡Hola, mundo!',
  'path' => '/'
];

echo Twig\render('index.twig', $model);
