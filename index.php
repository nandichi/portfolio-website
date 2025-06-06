<?php
// Front Controller Pattern - Alle verzoeken worden hierdoor afgehandeld
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

// Verwijder query string als die bestaat
$request_uri = strtok($request_uri, '?');

// Verwijder base path uit URI als die aanwezig is
if (!empty($base_path) && strpos($request_uri, $base_path) === 0) {
    $request_uri = substr($request_uri, strlen($base_path));
}

// Normaliseer de URI
$request_uri = trim($request_uri, '/');

// Debug informatie als er problemen zijn - verwijder in productie
if (isset($_GET['debug'])) {
    echo "<pre>";
    echo "Request URI: " . htmlspecialchars($request_uri) . "\n";
    echo "Base Path: " . htmlspecialchars($base_path) . "\n";
    echo "Script Name: " . htmlspecialchars($_SERVER['SCRIPT_NAME']) . "\n";
    echo "Document Root: " . htmlspecialchars($_SERVER['DOCUMENT_ROOT']) . "\n";
    echo "</pre>";
    exit;
}

// Bepaal welke pagina geladen moet worden
if (empty($request_uri)) {
    // Homepagina
    if (file_exists('pages/home.php')) {
        include 'pages/home.php';
    } else {
        echo "<h1>Welkom op mijn portfolio</h1>";
        echo "<p>De homepagina is momenteel niet beschikbaar.</p>";
    }
} else {
    // Map de URI naar het juiste bestand
    $page_file = 'pages/' . $request_uri . '.php';
    
    if (file_exists($page_file)) {
        include $page_file;
    } else {
        // 404 pagina als het bestand niet bestaat
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 - Pagina niet gevonden</h1>";
        echo "<p>De pagina '$request_uri' bestaat niet.</p>";
        echo "<p><a href='/'>Terug naar de homepagina</a></p>";
    }
}
?>
