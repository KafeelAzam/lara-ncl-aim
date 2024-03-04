<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwapCard extends Model
{
    protected $table = 'swap_cards';
    protected $fillable = ['qr_code', 'card_number'];
}
