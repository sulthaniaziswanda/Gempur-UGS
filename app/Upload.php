<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Upload extends Model
{
    use Notifiable;
    protected $fillable = ['id', 'bukti_upload', 'keterangan'];
}
