<?php


// Generar el ETag basado en alguna lógica específica
$version = '1.0'; // Puedes generar este valor según tus necesidades
$etag = '"'.md5($version).'"';

// $etag .='quotes';
// echo stripslashes($etag);
// echo stripslashes($_SERVER['HTTP_IF_NONE_MATCH']);
// Verificar si el cliente ya tiene una copia en caché
// echo $_SERVER['HTTP_IF_NONE_MATCH'] . "     ";
// echo $etag;
if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && stripslashes($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {
    // El cliente ya tiene una copia en caché válida
    // echo '"';
    header('HTTP/1.1 304 Not Modified');
    exit;
}else{
    header('ETag: '.$etag);
    echo 'Este es el contenido de la página"x.';

}

// Enviar el ETag en la respuesta HTTP
// header('ETag: "'.md5($timestamp.$file).'"');

// El contenido del recurso
// echo 'Etag: '. $etag . ' ';


// Puedes agregar más encabezados y contenido aquí
?>
