<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Ads extends Notification
{
    use Queueable;

    /**
   * Create a new notification instance.
   *
   * @return void
   */
  // private $user;
  private $review;
  private $stat;

  public function __construct($review,$stat)
  {
      $this->review = $review;
      $this->stat = $stat;
  }

  /**
   * Get the notification's delivery channels.
   *
   * @param  mixed  $notifiable
   * @return array
   */
  public function via($notifiable)
  {
      return ['database'];
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
                  ->line('The introduction to the notification.')
                  ->action('Notification Action', url('/'))
                  ->line('Thank you for using our application!');
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
          'type' => 'Advert',
          'data' => $this->review,
          'message' => "Your Advert was ".$this->stat,
      ];
  }
}
