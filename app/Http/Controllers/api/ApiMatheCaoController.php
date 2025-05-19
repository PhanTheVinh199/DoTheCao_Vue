<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaThe_NhaCungCap;

class ApiMatheCaoController extends Controller
{
     public function index()
    {
        $data = MaThe_NhaCungCap::with('sanpham')->where('trang_thai', 'hoat_dong')->get();
        return response()->json($data);
    }
}
