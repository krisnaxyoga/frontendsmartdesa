<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Halaman;
use App\Desa;
use App\Slider;
use App\DesaPamong;
use App\Artikels;
use App\KategoriArtikels;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dataHalaman = Halaman::where("desa_id",env('DESA_ID'))
            ->where('tipe', 'LEMBAGA_MASYARAKAT')
            ->get();

        $dataKeuangan = Halaman::where('tipe', 'KEUANGAN')
            ->where("desa_id",env('DESA_ID'))
            ->get();

        $desaPamong = DesaPamong::select("*")
            ->where("desa_id",env('DESA_ID'))
            ->where('is_kades', '=', 1)
            ->get();

        $dataArtikel = Artikels::select("*")
            ->where("desa_id",env('DESA_ID'))
            ->orderBy("created_at", "DESC")
            ->limit(3)
            ->get();

        $dataKategori = KategoriArtikels::select("*")
            ->where("desa_id",env('DESA_ID'))
            ->get();

        $dataDesa = Desa::where("id",env('DESA_ID'))
            ->get();

        //foreach data desa
        foreach ($dataDesa as $item) {
            $desa = $item;
        }

        // dd($desa);

        $dataSlider = Slider::select("*")
            ->where("desa_id",env('DESA_ID'))
            ->get();

        View::share('slider', $dataSlider);
        View::share('dataKeuangan', $dataKeuangan);
        View::share('artikel', $dataArtikel);
        View::share('dataDesa', $dataDesa);
        View::share('dataKategori', $dataKategori);
        View::share('dataMenu', $dataHalaman);
        View::share('desa', $desa);
        View::share('desaPamong', $desaPamong);
    }
}
