<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhgia_taixe extends Model
{
    use HasFactory;
    protected $fillable = [
        'SoSao',
        'BinhLuan',
        'NgayLap',
        'NguoiDung_ID',
        'TaiXe_ID',
    ];
    protected $table = 'danhgia_taixe';
    public function taixe ()
    {
        return $this->belongsTo(taixe::class, 'TaiXe_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
}
