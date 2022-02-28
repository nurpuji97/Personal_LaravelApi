<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardTestimoni extends Model
{
    use HasFactory;

    protected $table = 'card_testimonis';
    
    protected $fillable = [
        'nama',
        'photo',
        'jabatan',
        'description',
        'rating'
    ];
}
