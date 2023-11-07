<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikels;
use App\KategoriArtikels;
use App\Desa;
use App\DesaPamong;

class beritaController extends Controller
{
    //
    public function index(){
        $detail = Artikels::select("*")
            ->where("desa_id",env('DESA_ID'))
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
    
        return view('berita.index',[
            'data'=>$detail, 
        ]);
    }

    public function detail($slug){
        $detail = Artikels::where('slug', $slug)
            ->where("desa_id",env('DESA_ID'))
            ->first();

        $kategori = Artikels::select("artikel.kategori_artikel_id","kategori_artikel.nama")
            ->join("kategori_artikel", "kategori_artikel.id", "=", "artikel.kategori_artikel_id")
            ->where("artikel.desa_id",env('DESA_ID'))
            ->where("artikel.slug", "=", $slug)->get();

        return view('berita.detail', [
            'dataId'=>$detail, 
            'kategoriArtikel'=>$kategori,
        ]);
    }

    public function kategori($id){
        $kategori = Artikels::where('kategori_artikel_id', $id)
        ->where("desa_id",env('DESA_ID'))
        ->orderBy('created_at', 'DESC')
        ->paginate(5);

        return view('berita.kategoriBerita', [
            'kategori'=>$kategori, 
        ]);
    }
}
