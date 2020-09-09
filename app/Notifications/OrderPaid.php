<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderPaid extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     private $order;
     public function __construct($order)
     {
         $this->order = $order;
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
      // dd($this);
      $url = url('/buyer/track/'.$this->order->pickup_code);

        return (new MailMessage)
                ->subject('Order Successful')

                ->markdown('mail.order.paid',['url' => $url,'order'=>$this->order,
              'name' => auth()->user()->firstname]);
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
          'type' => 'order',
          'data' => $this->order,
          'message' => 'Your Order with ID: '.$this->order->id." was Successful",
      ];
    }
}
