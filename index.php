<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicación
 */
require 'config.php';
require 'helpers.php';

// Library
require 'library/request.php';
require 'library/Inflector.php';

// Llamar a al controlador indicado

if (empty($_GET['url']))
{
	$url = "";
}
else
{
	$url = $_GET['url'];
}

$request = new Request($url);
$request->execute();
