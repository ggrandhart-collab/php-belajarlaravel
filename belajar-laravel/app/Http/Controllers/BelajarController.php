<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller{

    public function index(){
        $title = "Belajar Laravel asik asik";
        return view ('belajar', compact('title'));
    }
    public function tambah()
    {
        $title = "Penjumlahan";
        return view('tambah', compact('title'));
    }

    public function actionTambah(Request $request)
    {
        $title= "penjumlahan";
        $angka1 = $request->angka1;
        $angka2 = $request->input ('angka2');
        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah','title'));
    }
    public function kurang()
    {
        $title = "Pengurangan";
        return view('kurang', compact('title'));
    }

    public function actionKurang(Request $request)
    {
        $title = "pengurangan";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $Kurang = $angka1 - $angka2;
        return view('Kurang', compact('Kurang', 'title'));
    }
    public function actionKali(Request $request)
    {
        $title = "perkalian";
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');
        $Kali = $angka1 * $angka2;
        return view('Kali', compact('Kali', 'title'));
    }
    public function kali()
    {
        $title = "Perkalian";
        return view('kali', compact('title'));
    }
    public function bagi()
    {
        $title = "Pembagian";
        return view('bagi', compact('title'));
    }


}
