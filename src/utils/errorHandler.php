<?php
// Función para manejar los errores
function errorHandler($errno, $errstr, $errfile, $errline)
{
    if (!isset($GLOBALS['error_handler']) || !$GLOBALS['error_handler']) {
        return;
    }
    global $webhook_errores;

    $codigo = "```php\n";
    $codigo .= "Error: " . $errstr . "\n";
    $codigo .= "Archivo: " . $errfile . "\n";
    $codigo .= "Línea: " . $errline . "\n";
    $codigo .= "```";

    $payload = [
        'embeds' => [
            [
                'title' => 'Se produjo un error',
                'description' => $codigo,
                'color' => 16711680
            ]
        ]
    ];

    // Convertir el payload a JSON
    $jsonPayload = json_encode($payload);

    // Crear un gestor multi CURL
    $multiCurl = curl_multi_init();
    $handles = [];

    // Configurar y agregar las solicitudes CURL al gestor multi
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $webhook_errores);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonPayload)
    ]);
    curl_multi_add_handle($multiCurl, $curl);
    $handles[] = $curl;

    // Ejecutar las solicitudes CURL en paralelo
    $running = null;
    do {
        curl_multi_exec($multiCurl, $running);
    } while ($running);

    // Cerrar los handles y el gestor multi CURL
    foreach ($handles as $handle) {
        curl_multi_remove_handle($multiCurl, $handle);
        curl_close($handle);
    }
    curl_multi_close($multiCurl);
}

set_error_handler("errorHandler");
?>