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
        //
    
}
        //
    }

