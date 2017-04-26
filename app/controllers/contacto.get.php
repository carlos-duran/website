<?php

use Siler\{Twig, Http};
use RedBeanPHP\R;

$contacts = R::findAll('contact');

$model = [
  'contacts' => $contacts,
  'path' => Http\path()
];

echo Twig\render('contacto.twig', $model);
