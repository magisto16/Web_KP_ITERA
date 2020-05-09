<?php

use Illuminate\Database\Seeder;

use App\Dosen;
use App\User;
use Faker\Factory as Faker;
use Faker\Provider\en_US\Company as Employee;
class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dosen::truncate();
        $users=user::all();
        $faker = Faker::create('id_ID');
        $employee=Faker::create('en_US');
        foreach($users as $user){
            if($user->hasRole('dosen pembimbing')){
                $user['email_verified_at']=now();
                Dosen::create([
                    'user_id'=>$user['id'],
                    'NIP_NRK'=> $employee->ein,
                    'Kontak_Person'=>$faker->phoneNumber,
                ]);
                $user->save();
            }
        }
    }
}
