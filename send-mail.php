<?php
/**
 * send-mail.php — Baldonedo Nettoyage contact form handler
 * Expects POST via AJAX, returns JSON response.
 */

declare(strict_types=1);

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Méthode non autorisée.']));
}

header('Content-Type: application/json; charset=utf-8');

// ── Autoload (Composer / PHPMailer) ───────────────────────────────────────
$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    exit(json_encode(['success' => false, 'message' => 'Dépendances manquantes. Lancez composer install.']));
}
require_once $autoload;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ── Sanitize & validate input ─────────────────────────────────────────────
function sanitize(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

$nom       = sanitize($_POST['nom']       ?? '');
$email     = sanitize($_POST['email']     ?? '');
$telephone = sanitize($_POST['telephone'] ?? '');
$sujet     = sanitize($_POST['sujet']     ?? 'Demande de contact');
$message   = sanitize($_POST['message']   ?? '');

$errors = [];
if (empty($nom))                      { $errors[] = 'Le nom est requis.'; }
if (empty($email))                    { $errors[] = 'L\'adresse e-mail est requise.'; }
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = 'L\'adresse e-mail n\'est pas valide.'; }
if (empty($message))                  { $errors[] = 'Le message est requis.'; }

if (!empty($errors)) {
    http_response_code(422);
    exit(json_encode(['success' => false, 'message' => implode(' ', $errors)]));
}

// ── PHPMailer ─────────────────────────────────────────────────────────────
$mail = new PHPMailer(true);

try {
    // ── SMTP configuration ────────────────────────────────────────────────
    // Uses Gmail SMTP. Generate an App Password at:
    // https://myaccount.google.com/apppasswords  (2-FA must be enabled)
    // Then set MAIL_USER and MAIL_PASS as environment variables, or replace
    // the getenv() calls below with your credentials directly.
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('MAIL_USER') ?: 'courrielchristos@gmail.com';
    $mail->Password   = getenv('MAIL_PASS') ?: 'wuidyrencauargso';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->CharSet  = 'UTF-8';
    $mail->Encoding = 'base64';

    // Recipients
    $mail->setFrom('noreply@baldonedo.com', 'Baldonedo Nettoyage — Site web');
    $mail->addAddress('courrielchristos@gmail.com', 'Baldonedo Nettoyage');
    $mail->addAddress('t.martins@baldonedo.com', 'Baldonedo Nettoyage');
    $mail->addAddress('smninettoyage.industriel@gmail.com', 'Baldonedo Nettoyage');
    $mail->addReplyTo($email, $nom);

    // Content
    $mail->isHTML(true);
    $mail->Subject = '[Contact Site] ' . ($sujet ?: 'Nouveau message') . ' — ' . $nom;

    $htmlBody = <<<HTML
    <!DOCTYPE html>
    <html lang="fr">
    <head><meta charset="UTF-8"></head>
    <body style="font-family:Arial,sans-serif;color:#1e2a30;max-width:600px;margin:0 auto;padding:20px;">
        <div style="background:#5aaec0;padding:24px 32px;border-radius:8px 8px 0 0;">
            <h1 style="color:#fff;margin:0;font-size:1.3rem;font-weight:600;">Nouveau message — Baldonedo Nettoyage</h1>
        </div>
        <div style="background:#fdfdfd;border:1px solid #cfe7eb;border-top:none;padding:32px;border-radius:0 0 8px 8px;">
            <table style="width:100%;border-collapse:collapse;">
                <tr><td style="padding:8px 0;color:#5a6e76;width:130px;vertical-align:top;font-size:.9rem;">Nom</td><td style="padding:8px 0;font-weight:600;">{$nom}</td></tr>
                <tr><td style="padding:8px 0;color:#5a6e76;vertical-align:top;font-size:.9rem;">E-mail</td><td style="padding:8px 0;"><a href="mailto:{$email}" style="color:#5aaec0;">{$email}</a></td></tr>
                <tr><td style="padding:8px 0;color:#5a6e76;vertical-align:top;font-size:.9rem;">Téléphone</td><td style="padding:8px 0;">{$telephone}</td></tr>
                <tr><td style="padding:8px 0;color:#5a6e76;vertical-align:top;font-size:.9rem;">Sujet</td><td style="padding:8px 0;">{$sujet}</td></tr>
            </table>
            <hr style="border:none;border-top:1px solid #cfe7eb;margin:20px 0;">
            <h3 style="margin:0 0 12px;font-size:1rem;color:#5a6e76;font-weight:500;text-transform:uppercase;letter-spacing:.05em;">Message</h3>
            <p style="margin:0;line-height:1.7;white-space:pre-line;">{$message}</p>
        </div>
        <p style="margin-top:16px;font-size:.75rem;color:#aaa;text-align:center;">Envoyé depuis le formulaire de contact de baldonedo.com</p>
    </body>
    </html>
    HTML;

    $textBody = "Nouveau message depuis le site Baldonedo Nettoyage\n\n"
              . "Nom : {$nom}\nE-mail : {$email}\nTéléphone : {$telephone}\nSujet : {$sujet}\n\nMessage :\n{$message}";

    $mail->Body    = $htmlBody;
    $mail->AltBody = $textBody;

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Votre message a bien été envoyé. Nous vous répondrons dans les 24 heures.',
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous appeler directement.',
    ]);
}
