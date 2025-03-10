<?php

namespace App\Notifications;

use App\Models\ApprovedStudents;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StudentApprovedNotification extends Notification
{
    
    public $finalstudent;
    /**
     * Create a new notification instance.
     */
    public function __construct($finalstudent)
    {
        $this->finalstudent = $finalstudent;
        // dump($finalstudent);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Congratulations! '. $this->finalstudent->fullname)
                    ->action('Notification Action', url('/'))
                    ->line('You have been selected for the course '. $this->finalstudent->course. ' offered by '. $this->finalstudent->college )
                    ->line('Thank you for applying!')
                    ->line('Good Luck for your future!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'You have been selected for the course '. $this->finalstudent->course . ' offered by ' . $this->finalstudent->college,
            'student_id' => $this->finalstudent->id,
            'created_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}