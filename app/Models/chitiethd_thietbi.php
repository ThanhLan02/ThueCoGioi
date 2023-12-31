<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethd_thietbi extends Model
{
    use HasFactory;
    protected $fillable = [
        'HoaDon_ID',
        'ThietBi_ID',
        'NCT_ID',
        'soluong',
        'dongia',
        'TinhTrang',

    ];
    protected $table = 'chitiethd_thietbi';
    public function hd ()
    {
        return $this->belongsTo(hoadon::class, 'HoaDon_ID', 'id');
    }
    public function thietbi ()
    {
        return $this->belongsTo(thietbi::class, 'ThietBi_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NCT_ID', 'id');
    }
}
