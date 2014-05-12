<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicación
 */
require 'config.php';
require 'helpers.php';

// Llamar a al controlador indicado

controller($_GET['url']);

