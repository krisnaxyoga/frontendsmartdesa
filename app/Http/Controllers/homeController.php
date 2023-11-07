<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikels;
use App\KategoriArtikels;
use App\Desa;
use App\DesaPamong;
use App\Halaman;

class homeController extends Controller
{
    public function index(){

        $dataArtikel = Artikels::select("*")
        ->where("desa_id",env('DESA_ID'))
        ->orderBy("created_at", "DESC")
        ->limit(3)
        ->get();

        // dd(env('DESA_ID'));

        return view('home.index')->with('dataArtikel', $dataArtikel);
    }

    public function privacy(){
        return view('privacy');
    }
}
