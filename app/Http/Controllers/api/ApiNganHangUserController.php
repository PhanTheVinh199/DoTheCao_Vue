<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nganhang;

class ApiNganHangUserController extends Controller
{
    public function index()
    {
        $data = Nganhang::all();
        return response()->json($data);
    }
}
