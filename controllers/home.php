<?php

$confidencial = "wow such private very confidential";
$language = "PHP";
$titulo = 'MejorandoPHP';

// Llamando una función
view('home', compact('language', 'titulo'));