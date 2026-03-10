<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaesarCipher;

class CipherController extends Controller
{
    public function index()
    {
        return view('cipher');
    }

    public function process(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'shift' => 'required|integer',
            'action' => 'required|in:encrypt,decrypt'
        ]);

        $text = $request->input('text');
        $shift = $request->input('shift');
        $action = $request->input('action');

        $result = ($action === 'encrypt')
            ? CaesarCipher::encrypt($text, $shift)
            : CaesarCipher::decrypt($text, $shift);

        return view('cipher', compact('result', 'text', 'shift', 'action'));
    }
}
