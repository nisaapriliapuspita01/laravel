<?php

namespace App\Http\Controllers;

use\App\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    //
    public function index(){

        $buku = Penulis::all();
        return view("buku.index" , compact('buku'));
    }
    public function show($id) {

        $buku = Penulis::find($id);
        return view("buku.show" , compact('buku'));
    }
    public function hitungbuku(){

        $buku = Penulis::count();
        return $buku;
    }
    public function buat_data(){

    }
    public function update($id,$judul){
        $buku = Penulis::find($id);
        $buku = new Penulis;
        $buku->judul = $judul;
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
