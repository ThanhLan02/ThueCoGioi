<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khuyenmai extends Model
{
    use HasFactory;


    protected $fillable = [
        'tenkm',
        'giatrikm',
        'ngaybd',
        'ngaykt',
    ];
    protected $table = 'KhuyenMai';
}
