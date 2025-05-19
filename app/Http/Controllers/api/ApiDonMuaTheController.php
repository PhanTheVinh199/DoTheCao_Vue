<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaThe_DonHang;

class ApiDonMuaTheController extends Controller
{
    public function index()
    {
        $data = MaThe_DonHang::with(['sanPham', 'ThanhVien'])->get();
        return response()->json($data);
    }
}
