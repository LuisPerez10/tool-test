<?php


// Generar el ETag basado en alguna lógica específica
$version = '1.0'; // Puedes generar este valor según tus necesidades
$etag = md5($version);

// Verificar si el cliente ya tiene una copia en caché
if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
    // El cliente ya tiene una copia en caché válida
    header('HTTP/1.1 304 Not Modified');
    exit;
}

// Enviar el ETag en la respuesta HTTP
header('ETag: ' . $etag);

// El contenido del recurso
echo 'Etag: '. $etag;
echo 'Este es el contenido de la página.x.';

// Puedes agregar más encabezados y contenido aquí
?>
