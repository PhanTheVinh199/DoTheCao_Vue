<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NapTien;

class ApiNapTienController extends Controller
{
     public function index()
    {
        $data = NapTien::all();
        return response()->json($data);
    }
}

