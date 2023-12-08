<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taixe extends Model
{
    use HasFactory;


    protected $fillable = [
        'TenTX',
        'GioiTinh',
        'SDT',
        'DiaChi',
        'Email',
        'Anh',
        'MoTa',
        'GiaThue',
        'GiaKM',
        'KhuyenMai_ID',
        'TrangThai',
        'SoSao',
        'SoDanhGia',
        'NguoiDung_ID',
    ];
    protected $table = 'taixe';
    public function khuyenmai ()
    {
        return $this->belongsTo(khuyenmai::class, 'KhuyenMai_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
}
