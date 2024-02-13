<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRgetData extends Model
{
    use HasFactory;

    protected $table = 'QRgetData';

    protected $fillable = [
        'id',
        'qrcode',

    ];
}
