<?php
use App\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = new Kelas;
        $kelas->judul= 'BelajarPhp';
        $kelas->jumlah_siswa= 30;
        $kelas->nama_sekolah= 'Smk Assalaam';
        $kelas->nama_siswa= "Nisa Aprilia Puspita";
        $kelas->status = 1;
        $kelas->save();
        //
    }
}
