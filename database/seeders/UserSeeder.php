<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => "admin",
            'email' => "admin@zubirimanteo.com",
            'password' => bcrypt("password"),
            'role' => 1,
        ]);

        $firstNames = ['Oliver', 'Mary', 'Harry', 'Jane', 'Noah', 'Emily',
            'Jacob', 'Emma', 'Oscar', 'Patricia'];
        $lastnames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown',
            'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
        $genders = array(
            'male',
            'female',
        );

        for ($i = 0; $i < 10; $i++) {

            $randomName = random_int(0, 9);
            $randomLastName = random_int(0, 9);
            $gender = $genders[$randomName % 2];
            DB::table('users')->insert([
                'nif' => random_int(11111111, 99999999) . chr(rand(65,90)),
                'nombre' => $firstNames[$randomName],
                'apellido' => $lastnames[$randomLastName],
                'telefono' => random_int(610000000, 699999999),
                'fecha_nacimiento' => Carbon::today()->subDays(rand(-200, 365)),
                'genero' => $gender,
                'role' => 2,
                'email' => $firstNames[$randomName] . $lastnames[$randomLastName] . $i . "@zubirimanteo.com",
                'password' => bcrypt("password"),
            ]);
        }


    }
}
