<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $table = 'qrcodes';
    protected $fillable = ['card_id', 'qr_code'];
}

