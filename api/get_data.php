<?php
// Carga el autoloader de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Función para inicializar el cliente de la API
function getClient() {
    $client = new Google_Client();
    $client->setApplicationName('Mi App de Tablas');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);

    // Ruta al archivo JSON de credenciales que descargaste
    $client->setAuthConfig(__DIR__ . '/../credentials/tu-archivo-json.json');

    return $client;
}

try {
    // ID de tu hoja de cálculo (está en la URL)
    // ej: https://docs.google.com/spreadsheets/d/ESTE_ES_EL_ID/edit
    $spreadsheetId = 'AQUI_VA_EL_ID_DE_TU_SHEET';

    // Rango de celdas que quieres leer
    // ej: 'Hoja 1!A1:C10' (Hoja 1, columnas A a C, filas 1 a 10)
    $range = 'Hoja 1!A:C'; 

    $client = getClient();
    $service = new Google_Service_Sheets($client);

    // Obtiene los valores
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    if (empty($values)) {
        // Devuelve un array vacío si no hay datos
        echo json_encode([]);
    } else {
        // Devuelve los datos como JSON
        // Importante: Establece el header para que el navegador sepa que es JSON
        header('Content-Type: application/json');
        echo json_encode($values);
    }

} catch (Exception $e) {
    // Manejo de errores
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
}

?>