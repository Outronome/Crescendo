<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class CustomEmailVerification extends Notification
{
    use Queueable;

    /**
     * Determina os canais para os quais a notificação será enviada.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];  // Use o canal de e-mail
    }

    /**
     * Define o conteúdo do e-mail de verificação.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = URL::temporarySignedRoute(
            'verification.verify', 
            now()->addMinutes(60), 
            ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->email)]
        );

        return (new MailMessage)
            ->subject('Verifique seu e-mail')
            ->line('Por favor, clique no botão abaixo para verificar seu endereço de e-mail.')
            ->action('Verificar E-mail', $url)
            ->line('Este link de verificação expira em 60 minutos.');
    }

    /**
     * Define os dados para a notificação (caso você queira usar outros canais como SMS, por exemplo).
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            // Dados para a notificação (opcional)
        ];
    }
}
