<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmailNotification extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Confirme seu Endereço de Email')
            ->line('Por favor, clique no botão abaixo para verificar seu endereço de email.')
            ->action('Verificar Email', $verificationUrl)
            ->line('Se você não criou uma conta, nenhuma ação é necessária.');
    }
}
