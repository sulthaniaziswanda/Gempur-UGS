<?php

namespace App\Notifications;

use app\Upload;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUploadNotification extends Notification
{
    use Queueable;
    public $upload;

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'keterangan' => 'Sumbangan Masuk'
        ];
    }
}
