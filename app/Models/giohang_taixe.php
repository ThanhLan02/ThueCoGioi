<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giohang_taixe extends Model
{
    use HasFactory;
    protected $fillable = [
        'TaiXe_ID',
        'TaiXe_Ten',
        'TaiXe_Gia',
        'TaiXe_Anh',
        'TongTien',
        'NguoiDung_ID',
    ];
    protected $table = 'giohang_taixe';
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
    public function taixe ()
    {
        return $this->belongsTo(taixe::class, 'TaiXe_ID', 'id');
    }
}
