<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HosoController extends Controller
{
    public function __construct()
    {
        
    }
    public function hoso($id)
    {
        $User = User::findOrFail($id);
        return view('hoso')->with('User',$User);
    }
}
