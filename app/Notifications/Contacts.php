<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Message;

class Contacts extends Notification
{
    use Queueable;
    public  $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $contact)
    {
        $this->contact  = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
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
            ->greeting('Hello', $this->contact->nom)
            ->subject('Newsletter itranmission !')
            ->line('Votre méssage a bien éte transmis, nous vous remerçions pour votre collaboration')
            ->line('Merci de votre fidelité !')
            ->line('https://www.itranmissiong/');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'contact_id'    => $this->contact->id,
            'name'           => $this->contact->nom,
            'email'         => $this->contact->email,
            'message'       => $this->contact->excerpt(200),
        ];
    }

    public function toDatabase($notifiable)
    {
        return [

            'contact_id' => $this->contact->id,
            'name'        => $this->contact->nom,
            'email'      => $this->contact->email,
            'message'    => $this->contact->messageexcerpt(200),

        ];
    }
}
