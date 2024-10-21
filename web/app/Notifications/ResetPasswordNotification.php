<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordBase;

class ResetPasswordNotification extends ResetPasswordBase
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Redefinição de Senha')
            ->line('Você está recebendo este e-mail porque solicitou uma redefinição de senha para sua conta.')
            ->action('Redefinir Senha', url('new-password', $this->token))
            ->line('Se você não solicitou a redefinição, ignore este e-mail.');
    }
}
