<?php

function sendEmail(string $to, string $subject, string $html): bool
{
    loadEnv(__DIR__ . '/../.env');
    $apiKey = $_ENV['RESEND_API_KEY'] ?? '';

    if (empty($apiKey)) {
        return false;
    }

    $data = json_encode([
        'from' => $_ENV['RESEND_FROM'] ?? 'IV Labs <onboarding@resend.dev>',
        'to' => [$to],
        'subject' => $subject,
        'html' => $html,
    ]);

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json',
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode >= 200 && $httpCode < 300;
}

function sendLeadConfirmation(string $email): bool
{
    $html = '
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 30px;">
        <h2 style="color: #1e1b4b;">Voce esta na lista!</h2>
        <p style="color: #374151; font-size: 16px; line-height: 1.6;">
            Oi! Obrigado por se inscrever na <strong>Mentoria OpenClaw 2026</strong>.
        </p>
        <p style="color: #374151; font-size: 16px; line-height: 1.6;">
            Em breve voce vai receber mais detalhes sobre como criar seu assistente de IA pessoal
            funcionando no Telegram — em apenas 1 sabado, sem precisar programar.
        </p>
        <p style="color: #374151; font-size: 16px; line-height: 1.6;">
            Fique de olho no seu email!
        </p>
        <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 30px 0;">
        <p style="color: #9ca3af; font-size: 13px;">
            IV Labs — Construindo solucoes digitais com IA
        </p>
    </div>';

    return sendEmail($email, 'Voce esta na lista da Mentoria OpenClaw!', $html);
}

function sendLeadNotification(string $leadEmail, string $source): bool
{
    $notifyEmail = $_ENV['NOTIFY_EMAIL'] ?? 'vitor@ivlabs.com.br';
    $date = date('d/m/Y H:i');

    $html = '
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 30px;">
        <h2 style="color: #1e1b4b;">Novo lead capturado!</h2>
        <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; color: #6b7280; font-size: 14px;">Email</td>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; font-size: 14px;"><strong>' . htmlspecialchars($leadEmail) . '</strong></td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; color: #6b7280; font-size: 14px;">Origem</td>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; font-size: 14px;">' . htmlspecialchars($source) . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; color: #6b7280; font-size: 14px;">Data</td>
                <td style="padding: 10px; border-bottom: 1px solid #e5e7eb; font-size: 14px;">' . $date . '</td>
            </tr>
        </table>
    </div>';

    return sendEmail($notifyEmail, 'Novo lead: ' . $leadEmail, $html);
}
