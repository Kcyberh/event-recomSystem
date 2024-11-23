<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendRecommendationEmail($name, $skill, $phone, $recipientEmail)
{
    // HTML Template
    $emailHTML = <<<HTML
    <!DOCTYPE html>
    <html>
        <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Recommendation Email</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body { font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0; }
                .container { width: 100%; max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
                .header { background-color: #0073e6; color: #ffffff; padding: 20px; text-align: center; }
                .content { padding: 20px; color: #333333; }
                .footer { background-color: #f4f4f4; color: #888888; font-size: 12px; text-align: center; padding: 10px; }
                .button { background-color: #0073e6; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header"><h1>Recommendation for $name</h1></div>
                <div class="content">
                    <p>Dear Sir/Madam,</p>
                    <p>We would like to recommend <strong>$name</strong> for their exceptional skills in <strong>$skill</strong>.</p>
                    <p>You can reach them at: <strong>$phone</strong> for further discussions.</p>
                    <p>We are confident that $name will be a valuable addition to your team.</p>
                    <a href="mailto:$recipientEmail" class="button">Contact $name</a>
                </div>
                <div class="footer">
                    <p>&copy; 2024 Your Company, Inc. All rights reserved.</p>
                    <p>123 Business Road, Business City, BC 12345</p>
                </div>
            </div>
        </body>
    </html>
    HTML;

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = $_ENV['SMTP_ENCRYPTION'];
        $mail->Port       = $_ENV['SMTP_PORT'];
        $mail->CharSet    = 'UTF-8';

        // Sender & recipient
        $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
        $mail->addAddress($recipientEmail, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Recommendation for ' . $name;
        $mail->Body    = $emailHTML;

        // Send email
        $mail->send();
        
        echo "
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script>
         Swal.fire({
             title: 'Success!',
             text: 'Email sent successfully.',
             icon: 'success',
             confirmButtonText: 'OK'
         })
     </script>
     ";

    } catch (Exception $e) {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }
}
?>
