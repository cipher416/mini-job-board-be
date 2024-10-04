<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{

    use HasFactory;

    protected $fillable = [
        'job_title',
        'location',
        'job_type',
        'user_id'
    ];
}
