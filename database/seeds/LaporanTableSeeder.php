<?php

use Illuminate\Database\Seeder;
use App\Laporan;

class LaporanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laporan::truncate();
        Laporan::create([
            'name'=> 'LaporanKP_14117149.pdf',
            'mahasiswa_id'=>'1',
            'revisi'=>'1',
            'disetujui'=>'1'
        ]);
        Laporan::create([
            'name'=> 'LaporanKP_14117033.pdf',
            'mahasiswa_id'=>'2',
            'revisi'=>'3',
            'disetujui'=>'1'
        ]);

        Laporan::create([
            'name'=> 'LaporanKP_14117041.pdf',
            'mahasiswa_id'=>'3',
            'revisi'=>'2',
            'disetujui'=>'0'
        ]);
    }
}
