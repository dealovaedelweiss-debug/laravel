<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    // membuat listing
    public function index()
    {
        // ini untuk mengecek atau melihat
        // controller membutuhkan route
        // Get
        $pesertas = Peserta::get();
        $title = 'Data Peserta Baru';

        return view('peserta.index', compact('pesertas', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Peserta Baru';

        return view('peserta.create', compact('title'));
        // . sama dengan /
    }

    public function store(Request $request)
    {
        $nama = $request->nama;
        $umur = $request->umur;

        Peserta::create([
            'name' => $request->nama,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        return redirect()->to('peserta');
    }
}
