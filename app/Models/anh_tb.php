<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anh_tb extends Model
{
    use HasFactory;
    protected $fillable = [
        'ThietBi_ID',
        'anh',
    ];
    protected $table = 'anh_tb';
    public function thietbi ()
    {
        return $this->belongsTo(thietbi::class, 'ThietBi_ID', 'id');
    }
}
