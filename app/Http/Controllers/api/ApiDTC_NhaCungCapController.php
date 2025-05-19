<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DoithecaoNhacungcap;

class ApiDTC_NhaCungCapController extends Controller
{
    public function index()
    {
        $data = DoithecaoNhacungcap::all();
        return response()->json($data);
    }
}
