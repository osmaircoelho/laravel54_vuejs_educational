<?php

namespace SON\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    use Queueable;
	private $token;

	/**
	 * Create a new notification instance.
	 *
	 * @param $token
	 */
    public function __construct($token)
    {
        //
	    $this->token = $token;
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
    	$appName = config('app.name');
        return (new MailMessage)
	                ->subject("Your $appName account has been created")
	                ->greeting("Hello {$notifiable->name} Welcome to $appName")
                    ->line("Your registration number is: {$notifiable->enrolment}")
	                ->action('Click here to set your password ', route('password.reset', $this->token) )
                    ->line('Thank you for using our application!');
    }

}
