<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        //mengambil semua data di db
        $data = Pengguna::all();

        //mengirim data ke view
        return view('daftar_pengguna', compact('data'));
    }
}
