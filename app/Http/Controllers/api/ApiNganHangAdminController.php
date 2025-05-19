<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NganhangAdmin;

class ApiNganHangAdminController extends Controller
{
    public function index()
    {
        $data = NganhangAdmin::all();
        return response()->json($data);
    }
}

