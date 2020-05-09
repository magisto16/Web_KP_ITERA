<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Instansi;

class InstansiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Instansi::truncate();
        // DB::table('Instansi')->insert([
        //     'name' => 'Yayasan Nurul Huda Lampung',
        //     'alamat' => 'Jln. Serbajadi II, Kecamatan Natar, Lampung Selatan',
        //     'telp' => '0721 8013 610',
        //     'email' => 'admin@ynhl.org',
        // ]);
        for($i = 1; $i <= 49; $i++){
            // insert data ke table pegawai menggunakan Faker
            DB::table('Instansi')->insert([
                'name' => $faker->company,
                'alamat' => $faker->address,
                'telp' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }
    }
}
