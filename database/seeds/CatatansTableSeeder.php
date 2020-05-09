<?php

use App\Catatan;
use Illuminate\Database\Seeder;

class CatatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catatan::truncate();
        Catatan::create([
            'laporan_id'=> 1,
            'catatan'=>'Silahkan perbaiki BAB I, Pada bagian latar belakang kurang kuat, silahkan tambahkan literasi',
        ]);
        Catatan::create([
            'laporan_id'=> 1,
            'catatan'=>'Silahkan perbaiki BAB I, Lingkung Pekerjaan perlu lebih didteailkan',
        ]);
        Catatan::create([
            'laporan_id'=> 1,
            'catatan'=>'Perbaiki BAB II',
        ]);
        Catatan::create([
            'laporan_id'=> 2,
            'catatan'=>'Silahkan perbaiki BAB I, Pada bagian latar belakang kurang kuat, silahkan tambahkan literasi',
        ]);
        Catatan::create([
            'laporan_id'=> 2,
            'catatan'=>'Silahkan perbaiki BAB I, Lingkung Pekerjaan perlu lebih didteailkan',
        ]);
        Catatan::create([
            'laporan_id'=> 3,
            'catatan'=>'Perbaiki BAB II yaa, permasalahan spacing',
        ]);
    }
}
