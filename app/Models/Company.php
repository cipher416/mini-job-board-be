<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'companies';

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
