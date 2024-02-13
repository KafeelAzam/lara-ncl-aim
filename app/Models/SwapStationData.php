<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwapStationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'field1',
        'field2',
        // Add more fields as necessary
    ];
}
