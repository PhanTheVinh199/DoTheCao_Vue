<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ThanhVien;

class ApiThanhVienController extends Controller
{
     public function index()
    {
        $data = ThanhVien::all();
        return response()->json($data);
    }
}
