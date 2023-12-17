<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    use HasFactory;
    protected $fillable = [
        'NgayLap',
        'NguoiNhan',
        'SDT',
        'DiaChi',
        'PhuongThucTT',
        'TongTien',
        'TinhTrang',
    ];
    protected $table = 'hoadon';
    public function nhan ()
    {
        return $this->belongsTo(User::class, 'NguoiNhan', 'id');
    }

}
