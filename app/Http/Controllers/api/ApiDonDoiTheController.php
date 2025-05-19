<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DoithecaoDonhang;

class ApiDonDoiTheController extends Controller
{
    public function index()
    {
        $data = DoithecaoDonhang::with(['doithecao', 'thanhvien'])->get();
        return response()->json($data);
    }
}
