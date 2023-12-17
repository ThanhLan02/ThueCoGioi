<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reset_code extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
    ];
    protected $table = 'reset_code';
}
