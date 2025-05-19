<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaThe_NhaCungCap;

class ApiMTC_NhaCungCapController extends Controller
{
    public function index()
    {
        $data = MaThe_NhaCungCap::all();
        return response()->json($data);
    }
}
