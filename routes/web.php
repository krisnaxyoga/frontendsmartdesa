<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'homeController@index')->name('home.index');
Route::view('welcome', 'berita.detail');

Route::get('/berita/{slug}', 'beritaController@detail');

Route::get('/kategori/{id}/berita', 'beritaController@kategori');

Route::get('/berita', 'beritaController@index')->name('berita.index');

Route::get('/peta-desa', function() {
    return view('pages.peta',[

    ]);
});

Route::get('/halaman/{slug}', 'pagesController@lembaga');

Route::get('/visi-misi', 'pagesController@visi')->name('pages.visimisi');

Route::get('/sejarah', 'pagesController@sejarah')->name('pages.sejarah');

Route::get('/lembaga-desa', 'pagesController@lembagadesa')->name('pages.lembagadesa');

Route::get('/halaman/{slug}/keuangan', 'pagesController@keuangan')->name('pages.keuangan');

Route::get('/kontak', 'pagesController@kontak')->name('pages.kontak');

Route::get('/privacy.html', 'homeController@privacy')->name('privacy');

// Route::get('/kontak', function () {
//     return view('pages.kontak');
// });





