<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Bukti;
use App\Models\Galeri;
use App\Models\AdminReser;

class HomeController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
        $AdminReser = AdminReser::get();
        return view('pages.awal.index',compact('galeri','AdminReser'));
    }

    public function admin()
    {
        return view('pages.welcome');
    }

    public function reservasi()
    {
        return view('pages.awal.reservasi');
    }

    public function berhasil()
    {
        $pesanan = Reservasi::get();

        return view('pages.awal.berhasil', compact('pesanan'));
    }

    public function about()
    {

        return view('pages.awal.about');
    }

    public function harga()
    {
        return view('pages.awal.harga');
    }

    public function contact()
    {
       
        return view('pages.awal.contact');
    }
    public function konfir()
    {
        $bukti = Bukti::get();

        return view('pages.awal.konfir', compact('bukti'));
    }
}
