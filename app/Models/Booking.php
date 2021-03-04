<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'firstName',
        'lastName',
        'email',
        'passport',
        'airline',
    ];
}
