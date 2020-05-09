<?php

use App\Instansi;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Mahasiswa;
use App\User;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // Instansi::truncate();
        // DB::table('Instansi')->insert([
        //     'name' => 'Yayasan Nurul Huda Lampung',
        //     'alamat' => 'Jln. Serbajadi II, Kecamatan Natar, Lampung Selatan',
        //     'telp' => '0721 8013 610',
        //     'email' => 'admin@ynhl.org',
        // ]);
        // for($i = 1; $i <= 49; $i++){
        //     // insert data ke table pegawai menggunakan Faker
        //     DB::table('Instansi')->insert([
        //         'name' => $faker->company,
        //         'alamat' => $faker->address,
        //         'telp' => $faker->phoneNumber,
        //         'email' => $faker->email,
        //     ]);
        // }
        Mahasiswa::truncate();
        DB::table('instansi_mahasiswa')->truncate();
        $users=user::all();
        foreach($users as $user){
            if($user->hasRole('mahasiswa')){
                $instansi_id=(rand()%50);
                $dosen_id=(rand()%30)+2;
                if($instansi_id==0 || $instansi_id%10==0) $dosen_id=NULL;

                $mhs=Mahasiswa::create([
                    'dosen_id'=>$dosen_id,
                    'user_id'=>$user->id,
                ]);
                if($instansi_id!=0 && $mhs->id>2) {
                    $mhs->instansi()->sync($instansi_id);
                    $user['email_verified_at']=now();
                    $user->save();
                }
            }
        }

        //Update data Afdi Fauzul Bahar
        $mhs=Mahasiswa::find('1');
        $mhs->dosen_id=1;
        $mhs->nim='14117149';
        $mhs->tahun_masuk='2017';
        $mhs->alamat='Jln. Serbajadi II, Kec. Natar, Lampung Selatan, Lampung';
        $mhs->Kontak_Person='(+62) 822 6995 8597';
        $instansi_new=Instansi::create([
            'name' => 'Yayasan Nurul Huda Lampung',
            'alamat' => 'Jln. Serbajadi II, Kecamatan Natar, Lampung Selatan',
            'telp' => '0721 8013 610',
            'email' => 'admin@ynhl.org',
        ]);
        $instansi_id=$instansi_new->id;
        $mhs->instansi()->sync($instansi_id);
        $mhs->instansi()->updateExistingPivot($instansi_id,
                ['divisi' => "Programmer",
                'mulai'=>'2019-12-21',
                'selesai'=>'2020-03-22',
                'file_nilai'=>'14117149_nilai.pdf',
                'file_logsheet'=>'14117149_logsheet.pdf',
                'nilai'=>'100']);
        $mhs->save();

        //Mahasiswa dengan id 2
        $mhs=Mahasiswa::find('2');
        $mhs->dosen_id=1;
        $mhs->nim='14117033';
        $mhs->tahun_masuk='2017';
        $mhs->alamat='Lampung Timur';
        $mhs->Kontak_Person='(+62) 813 6701 3438';
        $instansi_id=(rand()%50+1);
        $mhs->instansi()->sync($instansi_id);
        $mhs->instansi()->updateExistingPivot($instansi_id,
                ['divisi' => "Quality Assurance",
                'mulai'=>'2020-06-21',
                'selesai'=>'2020-08-31',
                'file_nilai'=>'14117033_nilai.pdf',
                'file_logsheet'=>'14117033_logsheet.pdf',
                'nilai'=>'80']);
        $mhs->save();

        //Mahasiswa dengan id 3
        $mhs=Mahasiswa::find('3');
        $mhs->dosen_id=1;
        $mhs->nim='14117041';
        $mhs->tahun_masuk='2017';
        $mhs->alamat='Tanjung Bintang, Lampung Selatan';
        $mhs->Kontak_Person='(+62) 858 4153 3174';
        $instansi_id=(rand()%50+1);
        $mhs->instansi()->sync($instansi_id);
        $mhs->instansi()->updateExistingPivot($instansi_id,
                ['divisi' => "Programmer",
                'mulai'=>'2020-07-21',
                'selesai'=>'2020-08-31']);
        $mhs->save();
    }
}
