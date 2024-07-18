<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class ApiPegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return response([
            'success' => true,
            'message' => 'List Pegawai',
            'data' => $pegawai
        ], 200);
    }
}
