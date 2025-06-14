<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../vendor/autoload.php';

echo "<h1>SMTP Test</h1>\n";
echo "<p>Testing SMTP verbinding...</p>\n";

try {
    $mail = new PHPMailer(true);

    // Debug instellingen
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Debugoutput = 'html';

    // Server instellingen
    $mail->isSMTP();
    $mail->Host = 'smtp.strato.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'portfolio@naoufalandichi.com';
    $mail->Password = 'Heier3371!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    
    // SSL opties
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Test e-mail instellingen
    $mail->setFrom('portfolio@naoufalandichi.com', 'Test Email');
    $mail->addAddress('naoufal.exe@gmail.com', 'Test User');
    $mail->isHTML(true);
    $mail->Subject = 'SMTP Test - ' . date('Y-m-d H:i:s');
    $mail->Body = '<h1>Test Email</h1><p>Als je deze e-mail ontvangt, werkt de SMTP-configuratie correct!</p>';
    $mail->AltBody = 'Test Email - Als je deze e-mail ontvangt, werkt de SMTP-configuratie correct!';

    $mail->send();
    echo '<div style="color: green; font-weight: bold; margin: 20px 0;"><h2>✓ SUCCESS: Test email verzonden!</h2></div>';
    
} catch (Exception $e) {
    echo '<div style="color: red; font-weight: bold; margin: 20px 0;"><h2>✗ ERROR: ' . htmlspecialchars($e->getMessage()) . '</h2></div>';
    echo '<p><strong>Details:</strong></p>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
}

echo "<hr>";
echo "<h2>Server Informatie</h2>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
echo "<p><strong>OpenSSL:</strong> " . (extension_loaded('openssl') ? 'Enabled' : 'Disabled') . "</p>";
echo "<p><strong>Socket:</strong> " . (extension_loaded('sockets') ? 'Enabled' : 'Disabled') . "</p>";
echo "<p><strong>cURL:</strong> " . (extension_loaded('curl') ? 'Enabled' : 'Disabled') . "</p>";

// Test DNS lookup
echo "<h2>DNS Test</h2>";
$dns = dns_get_record('smtp.strato.com', DNS_MX);
if ($dns) {
    echo "<p style='color: green;'>✓ DNS lookup succesvol voor smtp.strato.com</p>";
    echo "<pre>" . print_r($dns, true) . "</pre>";
} else {
    echo "<p style='color: red;'>✗ DNS lookup gefaald voor smtp.strato.com</p>";
}

// Test socket verbinding
echo "<h2>Socket Test</h2>";
$socket = @fsockopen('smtp.strato.com', 465, $errno, $errstr, 10);
if ($socket) {
    echo "<p style='color: green;'>✓ Socket verbinding succesvol naar smtp.strato.com:465</p>";
    fclose($socket);
} else {
    echo "<p style='color: red;'>✗ Socket verbinding gefaald: $errstr ($errno)</p>";
}
?> 