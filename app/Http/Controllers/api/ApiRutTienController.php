<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RutTien;

class ApiRutTienController extends Controller
{
    public function index()
    {
        $data = RutTien::all();
        return response()->json($data);
    }
}
