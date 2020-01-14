<?php
use App\Penulis;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $buku = new Penulis;
        $buku->judul= 'BelajarPhp2';
        $buku->jumlah_halaman= 100;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "saya..";
        $buku->status = 1;
        $buku->save();

    $buku = new Penulis;
    $buku->judul= 'BelajarPhp2';
    $buku->jumlah_halaman= 200;
    $buku->penerbit= 'Gramedia Pustaka';
    $buku->synopsis= "saya..";
    $buku->status = 1;
    $buku->save();

    $buku = new Penulis;
    $buku->judul= 'BelajarPhp3';
    $buku->jumlah_halaman= 300;
    $buku->penerbit= 'Gramedia Pustaka';
    $buku->synopsis= "saya..";
    $buku->status = 1;
    $buku->save();

    $buku = new Penulis;
    $buku->judul= 'BelajarPhp4';
    $buku->jumlah_halaman= 400;
    $buku->penerbit= 'Gramedia Pustaka';
    $buku->synopsis= "saya..";
    $buku->status = 1;
    $buku->save();

    $buku = new Penulis;
    $buku->judul= 'BelajarPhp5';
    $buku->jumlah_halaman= 500;
    $buku->penerbit= 'Gramedia Pustaka';
    $buku->synopsis= "saya..";
    $buku->status = 1;
    $buku->save();
        //

}
        //
    }

