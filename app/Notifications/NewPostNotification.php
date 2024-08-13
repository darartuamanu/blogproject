<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewPostNotification extends Notification
{
    use Queueable;

    protected $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Post Added')
            ->line('A new post has been added to the blog.')
            ->action('Read Post', url('/posts/'.$this->post->id))
            ->line('Thank you for being a part of our community!');
    }
}
