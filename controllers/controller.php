<?php

// Obtener el parámetro "page" de la URL
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

// Cargar la vista correspondiente
if ($page === 'index' || $page === 'index.php') {
    include 'views/index.php'; // Vista de Inicio
} elseif ($page === 'array_string' || $page === 'array_string.php') {
    include 'views/array_string.php'; // Vista de Productos
} elseif ($page === 'funcion_flujo' || $page === 'funcion_flujo.php') {
    include 'views/funcion_flujo.php'; // Vista de Productos
} elseif ($page === 'manejo_archivos' || $page === 'manejo_archivos.php') {
    include 'views/manejo_archivos.php'; // Vista de Productos
} elseif ($page === 'formulario' || $page === 'formulario.php') {
    include 'views/formulario.php'; // Vista de Productos
} else {
    // Página no encontrada
    echo "Página no encontrada";
}
