<?php

use Siler\Twig;
use RedBeanPHP\R;

$contacts = R::findAll('contact');

$model = [
  'contacts' => $contacts,
  'path' => '/contacto'
];

echo Twig\render('contacto.twig', $model);
