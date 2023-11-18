<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class thietbi extends Model
{
    use HasFactory;
    protected $fillable = [
        'TenTB',
        'MoTa',
        'File',
        'Anh',
        'GiaThue',
        'GiaKM',
        'TinhTrang',
        'Loai_ID',
        'Hang_ID',
        'KhuyenMai_ID',
        'SoSao',
        'SoDanhGia',
        'NguoiDung_ID',
    ];
    protected $table = 'thietbi';
    public function loai ()
    {
        return $this->belongsTo(loaixe::class, 'Loai_ID', 'id');
    }
    public function hang ()
    {
        return $this->belongsTo(hang::class, 'Hang_ID', 'id');
    }
    public function khuyenmai ()
    {
        return $this->belongsTo(khuyenmai::class, 'KhuyenMai_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NguoiDung_ID', 'id');
    }
}
