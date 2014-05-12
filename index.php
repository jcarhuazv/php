<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicación
 */
require 'config.php';
require 'helpers.php';

// Llamar a los controladores individuales

// index.php
if (empty($_GET['url']))
{
	require "controllers/home.php";
}
// index.php?url=contactos
elseif ($_GET['url'] == 'contactos')
{
	require "controllers/contactos.php";
}
// index.php?url=asdasdasd
else
{
	header("HTTP/1.0 404 Not found");
	exit("Pagina no encontrada");
}