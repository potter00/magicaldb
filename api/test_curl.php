<?php
// Carga el autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

// Descomenta esto si la Solución 1 de get_data.php no funcionó
// unset($_SERVER['NO_PROXY']); 
// unset($_SERVER['HTTP_PROXY']);
// unset($_SERVER['HTTPS_PROXY']);


echo "Iniciando prueba de Guzzle/cURL...<br>";

try {
    $client = new Client([
        'verify' => false // Forzamos no verificar SSL para la prueba
        
    ]);

    echo "Cliente Guzzle creado. Intentando conectar a google.com...<br>";
    
    // Hacemos una petición simple a un sitio con SSL
    $response = $client->request('GET', 'https://www.google.com');

    echo "¡ÉXITO!<br>";
    echo "Status Code: " . $response->getStatusCode();

} catch (Exception $e) {
    echo "<h1>Error en la prueba de cURL</h1>";
    echo "<pre>";
    var_dump($e->getMessage());
    echo "<br>--- Stack Trace ---<br>";
    var_dump($e->getTraceAsString());
    echo "</pre>";
}