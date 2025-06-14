<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../vendor/autoload.php';

header('Content-Type: application/json');

try {
    // Controleer of het een POST-verzoek is
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Alleen POST-verzoeken zijn toegestaan');
    }

    // Haal de formuliergegevens op
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Valideer de invoer
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        throw new Exception('Alle velden zijn verplicht');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Ongeldig e-mailadres');
    }

    // Maak een nieuwe PHPMailer instantie
    $mail = new PHPMailer(true);

    // Debug instellingen
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Debugoutput = 'error_log';

    // Probeer verschillende SMTP configuraties voor Strato
    $smtp_configs = [
        [
            'host' => 'smtp.strato.com',
            'port' => 587,
            'secure' => PHPMailer::ENCRYPTION_STARTTLS,
            'name' => 'SMTP with STARTTLS'
        ],
        [
            'host' => 'smtp.strato.com',
            'port' => 465,
            'secure' => PHPMailer::ENCRYPTION_SMTPS,
            'name' => 'SMTP with SSL'
        ],
        [
            'host' => 'smtp.strato.de',
            'port' => 587,
            'secure' => PHPMailer::ENCRYPTION_STARTTLS,
            'name' => 'Alternative host with STARTTLS'
        ]
    ];

    $success = false;
    $last_error = '';

    foreach ($smtp_configs as $config) {
        try {
            // Reset PHPMailer voor nieuwe poging
            $mail->clearAddresses();
            $mail->clearAttachments();
            $mail->clearReplyTos();
            
            $mail->isSMTP();
            $mail->Host = $config['host'];
            $mail->SMTPAuth = true;
            $mail->Username = 'portfolio@naoufalandichi.com';
            $mail->Password = 'Heier3371!';
            $mail->SMTPSecure = $config['secure'];
            $mail->Port = $config['port'];
            
            // SSL opties
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Timeout instellingen
            $mail->Timeout = 30;

            // E-mail instellingen
            $mail->setFrom('portfolio@naoufalandichi.com', 'Portfolio Contact Form');
            $mail->addAddress('portfolio@naoufalandichi.com', 'Naoufal Andichi');
            $mail->addAddress('naoufal.exe@gmail.com', 'Naoufal Andichi');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = "Nieuw contactformulier bericht: " . $subject;
            
            $mail->Body = "
                <!DOCTYPE html>
                <html lang='nl'>
                <head>
                    <meta charset='UTF-8'>
                    <title>Nieuw Contact Bericht</title>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background: #4F46E5; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background: #f9f9f9; }
                        .field { margin-bottom: 15px; padding: 10px; background: white; border-left: 4px solid #4F46E5; }
                        .label { font-weight: bold; color: #4F46E5; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h2>Nieuw Contact Bericht</h2>
                        </div>
                        <div class='content'>
                            <div class='field'>
                                <div class='label'>Naam:</div>
                                <div>" . htmlspecialchars($name) . "</div>
                            </div>
                            <div class='field'>
                                <div class='label'>E-mail:</div>
                                <div>" . htmlspecialchars($email) . "</div>
                            </div>
                            <div class='field'>
                                <div class='label'>Onderwerp:</div>
                                <div>" . htmlspecialchars($subject) . "</div>
                            </div>
                            <div class='field'>
                                <div class='label'>Bericht:</div>
                                <div>" . nl2br(htmlspecialchars($message)) . "</div>
                            </div>
                        </div>
                        <div style='text-align: center; padding: 20px; color: #666;'>
                            Verzonden via portfolio website - " . date('d-m-Y H:i:s') . "
                        </div>
                    </div>
                </body>
                </html>
            ";

            $mail->AltBody = "
                Nieuw bericht van contactformulier
                
                Naam: $name
                E-mail: $email
                Onderwerp: $subject
                
                Bericht:
                $message
                
                Verzonden: " . date('d-m-Y H:i:s');

            // Probeer te verzenden
            error_log("Trying SMTP config: " . $config['name'] . " - " . $config['host'] . ":" . $config['port']);
            
            if ($mail->send()) {
                $success = true;
                error_log("Email sent successfully using: " . $config['name']);
                break;
            }
            
        } catch (Exception $e) {
            $last_error = $e->getMessage();
            error_log("SMTP config failed (" . $config['name'] . "): " . $e->getMessage());
            continue;
        }
    }

    if ($success) {
        echo json_encode([
            'success' => true,
            'message' => 'Bericht succesvol verzonden',
            'debug' => 'E-mail verzonden naar beide adressen'
        ]);
    } else {
        throw new Exception('Alle SMTP configuraties gefaald. Laatste fout: ' . $last_error);
    }

} catch (Exception $e) {
    error_log("Contact form complete failure: " . $e->getMessage());
    
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Er is een technische fout opgetreden. Probeer het later opnieuw.',
        'debug' => $e->getMessage()
    ]);
} 