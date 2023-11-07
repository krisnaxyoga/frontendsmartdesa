<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikels;
use App\KategoriArtikels;
use App\Desa;
use App\DesaPamong;
use App\Halaman;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

        public function keuangan($slug)
        {
            $halaman = Halaman::where('tipe', 'KEUANGAN')
                ->where("desa_id",env('DESA_ID'))
                ->where('slug', $slug)
                ->orderBy('judul', 'DESC')
                ->get();

            return view('pages.keuangan',[
                'halamanLoad'=>$halaman,
            ]);
        }

        public function sejarah()
        {
            $halaman = Halaman::where('tipe', 'SEJARAH')
                ->where("desa_id",env('DESA_ID'))
                ->get();

            return view('pages.sejarah',[
                'halamanLoad'=>$halaman,
            ]);
        }

        public function visi()
        {
            $halaman = Halaman::where('tipe', 'VISIMISI')
                ->where("desa_id",env('DESA_ID'))
                ->get();

            return view('pages.visimisi',[
                'halamanLoad'=>$halaman,
            ]);
        }

        public function lembagadesa()
        {
            $halaman = Halaman::where('tipe', 'LEMBAGA_DESA')
                ->where("desa_id",env('DESA_ID'))
                ->get();

            return view('pages.lembagadesa',[
                'halamanLoad'=>$halaman,
            ]);
        }

        public function lembaga($slug)
        {
            $halaman = Halaman::where('slug', $slug)
            ->where("desa_id",env('DESA_ID'))
            ->first();

            return view('pages.lembaga')->with('halamanLoad', $halaman);
        }

        public function kontak(){
            $kontak = Desa::where("id",env('DESA_ID'))
            ->first();
            
            return view('pages.kontak')->with('kontak', $kontak);
        }
}
