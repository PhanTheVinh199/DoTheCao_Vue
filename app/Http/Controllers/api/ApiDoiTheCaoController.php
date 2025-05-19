<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DoithecaoNhacungcap;

class ApiDoiTheCaoController extends Controller
{
     public function index()
    {
        $data = DoithecaoNhacungcap::with('danhsach')->where('trang_thai', 'hoat_dong')->get();
        return response()->json($data);
    }
}
