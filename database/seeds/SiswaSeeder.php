<?php
use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = new Siswa;
        $siswa->nama='Nisa Aprilia Puspita';
        $siswa->nis='23456781';
        $siswa->kelas= '11 ';
        $siswa->jurusan= 'RPL';
        $siswa->alamat='Cigondewah';
        $siswa->tgl_lahir='2002-04-01';
        $siswa->save();
        //
    }
}
