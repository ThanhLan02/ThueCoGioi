<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anh_tx extends Model
{
    use HasFactory;
    protected $fillable = [
        'TaiXe_ID',
        'anh',
    ];
    protected $table = 'anh_tx';
    public function taixe ()
    {
        return $this->belongsTo(taixe::class, 'TaiXe_ID', 'id');
    }
}
