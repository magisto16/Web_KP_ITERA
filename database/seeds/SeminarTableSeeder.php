<?php

use Illuminate\Database\Seeder;
use App\seminar;

class SeminarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        seminar::truncate();
        $seminar_mhs=seminar::create([
            'name'=> 'Visualisasi Dashboard Pemasukan dan Pengeluaran Yayasan Nurul Huda Lampung',
            'lokasi'=>'D210',
            'pelaksanaan'=>'2020-04-9 10:00:00',
            'disetujui'=>'1',
            'mahasiswa_id'=>'1',
            'nilai'=>'100',
        ]);
        $seminar_mhs=seminar::create([
            'name'=> 'Web desa Kabupaten Lampung Tengah',
            'lokasi'=>'D210',
            'pelaksanaan'=>'2020-09-9 10:00:00',
            'disetujui'=>NULL,
            'catatan'=>'Saya bisa pada hari Rabu antara pukul 13:00-15:00 atau Jumat pukul 15:00-17:00',
            'mahasiswa_id'=>'2',
        ]);
    }
}
