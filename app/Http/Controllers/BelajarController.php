<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('counting');
    }

    public function indexKurang()
    {
        // $nilai1 = 10;
        // $nilai2 = 6;
        // $hasil = $nilai1 - $nilai2;

        return view('kurang');
    }

    public function indexkali()
    {
        // $nilai1 = 10;
        // $nilai2 = 6;
        // $hasil = $nilai1 - $nilai2;

        return view('kali');
    }

    // extends adalah turunan
    public function greeting()
    {
        return 'Selamat datang di kelas laravel';
    }

    public function tambah()
    {
        $nilai1 = 5;
        $nilai2 = 7;
        $hasil = $nilai1 + $nilai2;

        return "$nilai1 + $nilai2 = $hasil";
    }

    public function kurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $hasil = $angka1 - $angka2;

        return view('kurang', compact('hasil'));
        // compact melempar hasil ke view kurangh
    }

    public function kali(Request $request)
    {
        // $nilai1 = 90;
        // $nilai2 = 4;
        // $hasil = $nilai1 * $nilai2;
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $hasil = $angka1 * $angka2;

        return view('kali', compact('hasil'));
    }

    public function bagi()
    {
        $nilai1 = 16;
        $nilai2 = 2;
        $hasil = $nilai1 / $nilai2;

        return "$nilai1 / $nilai2 = $hasil";
    }
}
