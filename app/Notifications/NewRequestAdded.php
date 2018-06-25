<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewRequestAdded extends Notification
{
    use Queueable;

    public $requests;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($req)
    {
        $this->requests = $req;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
					->greeting('Hello Donor,')
                    ->line('A new blood request has been added.')
                    ->action('View Request', route('request.show' , ['id' => $this->requests->id]))
                    ->line('Thank you for using our application!');
    }

}
