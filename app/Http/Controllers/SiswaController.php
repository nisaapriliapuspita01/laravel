<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = Siswa::all();
            return $siswa;
        }
    public function show($id){
        $siswa = Siswa::find($id);
        }
    public function buatdata(){
        $siswa = Siswa::find(2);
        $siswa = new Siswa;
        $siswa->nama='Nisa Aprilia Puspita';
        $siswa->nis='23456781';
        $siswa->kelas= '11 ';
        $siswa->jurusan= 'RPL';
        $siswa->alamat='Cigondewah';
        $siswa->tgl_lahir='2002-04-01';
        $siswa->save();
        return $siswa;
    }
    public function update($id,$nama,$nis,$tgl_lahir){
        $siswa = Siswa::find(2);
        $siswa = new Siswa;
        $siswa->nama= $nama;
        $siswa->nis= $nis;
        $siswa->kelas= '11 ';
        $siswa->jurusan= 'RPL';
        $siswa->alamat='Cigondewah';
        $siswa->tgl_lahir= $tgl_lahir;
        $siswa->save();
        return $siswa;
    }
    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }

    }


