<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    //
    public function pass()
    {
        $nama = "Ucup Abdul Mustofa";
        $alamat  = "Jalan Yang Benar";
        return view('latihan',compact('nama','alamat'));
    }

    public function pass1()
    {
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }
    public function status($status= 'Jomblo')
    {
       // dd($status);
        return view('latihan2',compact('status'));
    }
    public function loop()
    {
        $buku= [
            ['judul'=>'Bangkit dari kubur','penerbit'=>'Nisa',
            'harga'=>100000,'penulis'=>'nsaprla_'
        ],
            ['judul'=>'Bangkit ','penerbit'=>'Susan',
            'harga'=>150000,'penulis'=>'nsaprla_'
        ],
            ['judul'=>'Masak','penerbit'=>'Tiara',
            'harga'=>250000,'penulis'=>'nsaprla_'
        ],
        ];
        return view('latihan3',compact('buku'));
    }
}
