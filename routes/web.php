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


//CRUD BUKU
Route::get('get-penulis','PenulisController@index');

Route::get('create-penulis','PenulisController@buat_data');

Route::get('get-penulis/{id}','PenulisController@show');

Route::get('delete-penulis/{id}','PenulisController@delete');

Route::get('update-penulis','PenulisController@update');

Route::get('hitung-penulis','PenulisController@hitung_buku');

//CRUD SISWA
Route::get('get-siswa','SiswaController@index');

Route::get('create-siswa','SiswaController@buat_data');

Route::get('get-siswa/{id}','SiswaController@show');

Route::get('delete-siswa/{id}','SiswaController@delete');

Route::get('update-siswa/{id}/{nama}/{nis}/{tgl_lahir}','SiswaController@update');

//pasing data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','PenulisController@index');
Route::get('book/{id}','PenulisController@show');

//gaji
Route::get('gajih','GajiController@indexgaji');
Route::get('gajih/{id}','GajiController@showgaji');

//Belajar Template
Route::get('/profil',function()
{
    return view ('profil');
});

Route::get('/kontak',function()
{
    return view ('kontak');
});

Route::get('/blog',function()
{
    return view ('blog');
});

//relasi
use App\Mahasiswa;
use App\Dosen;
use App\Wali;

Route::get('relasi-1', function () {
    $mahasiswa = Mahasiswa::where('nim','=','0123452')->first();

    return $mahasiswa->wali->nama;

});
Route::get('relasi-2', function () {
    //mencari data mahasiswa dengan nim
    $mahasiswa = Mahasiswa::where('nim','=','0123452')
    ->first();
    //menampilkan nama dosen dari pembimbing mahasiswa
    return $mahasiswa->dosen->nama;

});
Route::get('relasi-3', function () {
    //mencari dosen dengan nama
    $dosen = Dosen::where('nama','=','Nisa')
    ->first();
    // tampilkan seluruh data mahasiswa didiknya
    foreach($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
    '<strong>' . $temp->nim . '</strong></li>';

});
Route::get('relasi-4', function ( ) {
    //mencari data mahasiswa yang bernama susan
    $novay= Mahasiswa::where('nama','=','Susan')
    ->first();
    //menampilkan seluruh hobi susan
    foreach ($novay->hobi as $temp)
    echo '<li>' . $temp->hobi . '</li>';

});
Route::get('relasi-5', function ( ) {
    //mencari hobi yang bernama Mandi hujan
    $mandi_hujan = Hobi::where('hobi','=','mandi hujan')->first();
    //menampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
    '<strong>' . $temp->nim . '</strong></li>';
});

Route::get('eloquent', function ( ) {
    $data = Mahasiswa::with('wali','dosen','hobi')->get();
    return view ('eloquent',compact('data'));
});






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

