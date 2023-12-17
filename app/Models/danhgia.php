<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
    use HasFactory;
    protected $fillable = [
        'NguoiDung_ID',
        'SoSao',
        'BinhLuan',
        'NgayLap',
        'ThietBi_ID',
    ];
    protected $table = 'danhgia';
    public function thietbi ()
    {
        return $this->belongsTo(thietbi::class, 'ThietBi_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
}
