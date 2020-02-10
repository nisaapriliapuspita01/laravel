<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

    $dosen=Dosen::create(array(
    'nama' => 'Nisa',
    'nipd' => '0123451'
    ));
     $this->command->info('Data Dosen Tlah Diisi');

     //membuat data mahasiswa
    $susan=Mahasiswa::create(array(
        'nama' => 'Susan',
        'nim' => '0123452',
        'id_dosen' => $dosen->id
        ));
     $tiara=Mahasiswa::create(array(
         'nama' => 'Tiara',
         'nim' => '0123453',
         'id_dosen' => $dosen->id
         ));

    Wali::create(array(
        'nama' =>'tiara',
        'id_mahasiswa' =>$dosen->id
    ));

    Wali::create(array(
        'nama' =>  'ara',
        'id_mahasiswa' =>$susan->id
    ));
    Wali::create(array(
        'nama' =>  'tiara',
        'id_mahasiswa' =>$tiara->id
    ));
    //informasi ketika semua wali diiisi
     $this->command->info('Data Mahasiswa Telah Diisi');

     //membuat data tabel hobi
     $mandi_hujan = Hobi::create(array('hobi'=>'mandi hujan'));
     $baca_buku = Hobi::create(array('hobi'=>'baca buku'));

     $susan->hobi()->attach($mandi_hujan->id);
     $tiara->hobi()->attach($baca_buku->id);
     $susan->hobi()->attach($mandi_hujan->id);
     $susan->hobi()->attach($baca_buku->id);

     $this->command->info('Data mahasiswa dan Hobi telah diisi');
}
}
