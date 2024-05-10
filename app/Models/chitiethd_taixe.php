<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethd_taixe extends Model
{
    use HasFactory;
    protected $fillable = [
        'HoaDon_ID',
        'TaiXe_ID',
        'NCT_ID',
        'dongia',
        'TinhTrang',

    ];
    protected $table = 'chitiethd_taixe';
    public function hd ()
    {
        return $this->belongsTo(hoadon::class, 'HoaDon_ID', 'id');
    }
    public function taixe ()
    {
        return $this->belongsTo(taixe::class, 'TaiXe_ID', 'id');
    }
    public function user ()
    {
        return $this->belongsTo(User::class, 'NCT_ID', 'id');
    }
}
