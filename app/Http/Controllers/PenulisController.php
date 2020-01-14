<?php

namespace App\Http\Controllers;

use\App\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    //
    public function index(){

        $buku = Penulis::all();
        return $buku;
    }
    public function show() {

        $buku = Penulis::find($id1);
        return $buku;
    }
    public function hitungbuku(){

        $buku = Penulis::count();
        return $buku;
    }
    public function buat_data(){

    }
    public function update($id){
        $buku = Penulis::find($id);
        $buku->judul= 'BelajarPhp2';
        $buku->jumlah_halaman= 900;
        $buku->penerbit= 'Siapa?';
        $buku->synopsis= "saya..";
        $buku->status = false;
        $buku->save();
        return $buku;
    }
    public function delete($id){
        $buku = Penulis::find($id);
        $buku ->delete();
        return $buku;
    }
}
