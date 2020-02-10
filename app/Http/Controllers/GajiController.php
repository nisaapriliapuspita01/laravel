<?php

namespace App\Http\Controllers;

use\App\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    //
    public function indexgaji(){

        $gaji = Gaji::all();
        return view("gaji.index" , compact('gaji'));
    }
    public function showgaji($id) {

        $gaji = Gaji::find($id);
        return view("gaji.show" , compact('gaji'));
    }
    public function hitungbuku(){

        $gaji = Gaji::count();
        return $gaji;
    }
    public function buat_data(){

    }
    public function update($id,$judul){
        $gaji = Gaji::find($id);
        $gaji = new Gaji();
        $gaji->judul = $judul;
        $gaji->jumlah_halaman= 900;
        $gaji->penerbit= 'Siapa?';
        $gaji->synopsis= "saya..";
        $gaji->status = false;
        $gaji->save();
        return $gaji;
    }
    public function delete($id){
        $gaji = Gaji::find($id);
        $gaji ->delete();
        return $gaji;
    }
}
