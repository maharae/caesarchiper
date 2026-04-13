<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class CRUDController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('CRUD', compact('penggunas'));
    }

    public function store(Request $request)
    {
        Pengguna::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/crud');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        $penggunas = Pengguna::all();

        return view('CRUD', compact('penggunas', 'pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = Pengguna::find($id);

        $pengguna->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/crud');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();

        return redirect('/crud');
    }
}
