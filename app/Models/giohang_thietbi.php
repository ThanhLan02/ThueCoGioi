<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giohang_thietbi extends Model
{
    use HasFactory;
    protected $fillable = [
        'ThietBi_ID',
        'ThietBi_Ten',
        'ThietBi_Gia',
        'ThietBi_Anh',
        'SoLuong',
        'TongTien',
        'NguoiDung_ID',
    ];
    protected $table = 'giohang_thietbi';
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
    public function thietbi ()
    {
        return $this->belongsTo(thietbi::class, 'ThietBi_ID', 'id');
    }
}
