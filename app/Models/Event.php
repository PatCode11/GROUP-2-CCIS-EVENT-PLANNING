<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    'event', 'date', 'time', 'first_name', 'last_name', 'school_id'
    ];

}
