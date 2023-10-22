<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Formulario</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre">
    <br>
    <button id="enviar">Enviar</button>
    <br>
    <div id="mensaje"></div>

    <script>
        $(document).ready(function() {
            $('#enviar').click(function() {
                var nombre = $('#nombre').val();

                if (nombre === '') {
                    $('#mensaje').html('Por favor, complete todos los campos.');
                } else {
                    // Realizar una solicitud GET utilizando jQuery
                    $.get('process_form.php', { nombre: nombre }, function(response) {
                        $('#mensaje').html(response);
                    });
                }
            });
        });
    </script>
</body>
</html>
