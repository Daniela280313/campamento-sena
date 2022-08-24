<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    protected $fillable = ['name', 'descripcion', 'website', 'phone', 'user_id', 'average_reating', 'average_cost'];
    use HasFactory;
}
