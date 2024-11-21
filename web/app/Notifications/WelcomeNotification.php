<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification
{
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Bem-vindo a Afercon Pay!')
            ->greeting('Olá ' . $notifiable->name . '!')
            ->line('Sua conta foi criada com sucesso.')
            ->line('Estamos felizes por tê-lo conosco.')
            ->action('Acesse o Sistema', url('/sign-in'))
            ->line('Obrigado por se inscrever!');
    }
}

