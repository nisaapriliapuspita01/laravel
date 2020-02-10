<?php

use Illuminate\Database\Seeder;
use App\Gaji;
class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $gaji = new Gaji;
    $gaji->nip= '123451';
    $gaji->nama= 'Nisa Aprilia';
    $gaji->agama= 'Islam';
    $gaji->jenis_kelamin= 'Perempuan';
    $gaji->alamat= 'Cigondewah';
    $gaji->jabatan = 'manager';
    $gaji->jam_kerja = '01.00-05.00';
    $gaji->save();

    $gaji = new Gaji;
    $gaji->nip= '123452';
    $gaji->nama= 'Susan Nuraini';
    $gaji->agama= 'Islam';
    $gaji->jenis_kelamin= 'Perempuan';
    $gaji->alamat= 'LeuwiPanjang';
    $gaji->jabatan = 'Sekretaris';
    $gaji->jam_kerja = '02.00-07.00';
    $gaji->save();

    $gaji = new Gaji;
    $gaji->nip= '123453';
    $gaji->nama= 'Tiara Ceunah';
    $gaji->agama= 'Islam';
    $gaji->jenis_kelamin= 'Perempuan';
    $gaji->alamat= 'Cibaduyut';
    $gaji->jabatan = 'Staff';
    $gaji->jam_kerja = '02.00-10.00';
    $gaji->save();
    }
}
