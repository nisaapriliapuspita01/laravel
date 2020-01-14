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
Route::get('Contoh','contohController@latihan');

Route::get('Profil','contohController@latihan2');

Route::get('Profil2','contohController@latihan3');

Route::get('Profil3','contohController@latihan4');

Route::get('Profil4','contohController@latihan5');

Route::get('menu/{naon}','contohController@menu');

Route::get('menuu/{naon?}/{minum?}/{ukuran?}','contohController@apa');

Route::get('get-penulis','PenulisController@index');

Route::get('create-buku','PenulisController@buat_data');

Route::get('get-penulis/{id}','PenulisController@show');

Route::get('delete-penulis/{id}','PenulisController@delete');

Route::get('update-penulis','PenulisController@update');

Route::get('hitung-penulis','PenulisController@hitung_buku');

Route::get('/nama', function () {
    return ('Hai Nama Saya Nisa Aprilia');
});
Route::get('/umur', function () {
    return ('Umur saya 18 tahun');
});
Route::get('/sekolah', function () {
    return ('Saya sekolah di Smk Assalaam Bandung');
});
Route::get('/lahir', function () {
    return ('Ciamis,01-April-2002');
});
Route::get('/hobi', function () {
    return ('Hobi saya menyanyi');
});
Route::get('variable', function () {
    $data1 ="ini variable data 1";
    $data2 ="ini variable data 2";
    $data3 ="ini variable data 3";
    $data4 ="ini variable data 4";
    $data5 ="ini variable data 5";
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});
Route::get('angkot/{jurusan}/{nomor}', function () {
    $jurusan = 'Cibaduyut - Karang setra';
    $data =' Angkot Jurusan : ';
    $nomor = '14';
    $data2 ='nomor : ';
    return $data .' ' . $jurusan . "<br>" . $data2 .' ' . $nomor;
});
Route::get('user/{nama}/{sekolah}/{alamat}', function ($nama , $sekolah , $nomor) {
    return 'hai ' . $nama . ' yang bersekolah di ' . $sekolah . ' nomor' . $nomor;

});
Route::get('user/{nama}/{nilai?}', function ($nama , $nilai= 'belum mempunyai nilai') {
    if( $nilai <=100 && $nilai >= 50){
        echo "Grade A <br>";
    }
    else if ( $nilai <=49 && $nilai >= 30){
        echo "Grade B <br>";
    }
    else if ($nilai <=39 && $nilai >=20){
        echo "Grade C <br>";
    }
    else if ($nilai >=1 && $nilai <= 19){
        echo "Grade D <br>";
    }
    else {
        echo " anda tidak mendapatkan Grade";
    }
    return '<br>hai ' . $nama .'<br>'. ' nilai anda  ' . $nilai ;

});

