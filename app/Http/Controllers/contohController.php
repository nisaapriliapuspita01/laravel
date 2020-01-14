<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contohController extends Controller
{
    // Passing data from controller to view
    /*public function latihan2()
    {
       $a='Nisa ';
       $b='Aprilia';

       return 'Nama saya adalah '.$a.' '.$b ;
    }
    public function latihan3()
    {
        $a="Saha We";
        return view('test',compact('a'));
    }
    public function latihan4()
    {
        $a="Nisa";
        return view('test2',['nama'=>$a]);
    }
    public function latihan5()
    {
        $a="Nisa";
        $b="Islam";
        $c="Perempuan";
        $d="Cigondewah";
        $e="Smk Assalaam Bandung";
        $f="11";
        $g="Rpl";
        $h="Menyanyi";
        $i="17 tahun";

        return view('test2',['nama'=>$a,'agama'=>$b,'jk'=>$c,
        'alamat'=>$d,'sekolah'=>$e,'kelas'=>$f,
        'jurusan'=>$g,'hobi'=>$h,'umur'=>$i])
    }*/
    public function menu($a)
    {
        return view ('menu',compact('a'));

    }
    public function apa($a = null , $b= null, $c=null)
    {

        if(isset($a)){
             $a= "anda memesan $a";
        }
        if(isset($b)){
            $b = "& $b";
        }
        if(!isset($a)){
             $a = "Anda Belum memesan sesuatu";
        }
        if(isset ($c)){
           if(($c) >= 25000){
               echo 'Anda mendapatkan ukuran Jumbo';
           }
           elseif(($c) <= 25000 && ($c)>= 15000){
               echo 'Anda mendapatkan ukuran Medium';
           }
           elseif(($c) <= 15000 && ($c)>= 0){
               echo 'Anda mendapatkan ukuran Small';
           }
           else{
            echo "harga tidak valid";
          }
        }


        return view ('menu',compact('a','b','c'));

    }

}
