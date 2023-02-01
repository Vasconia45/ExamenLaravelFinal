<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nombres = ['DriverLeire', 'DriverCarla', 'DriverUnai', 'DriverInaxio', 'DriverNahikari', 'DriverInigo',
            'DriverMiren', 'DriverMIguel'];
        $apellidos = ['Lopez', 'Martinez', 'Aguirre', 'Perez', 'Sanchez', 'Rodriguez', 'Olazabal'];
        
        $valoracion=[0.0, 0.5, 1.0, 1.5, 2.0, 2.5, 3.0, 3.5, 4.0, 4.5, 5.0];

        for ($i = 0; $i < 10; $i++) {
            DB::table('drivers')->insert([
                'nombre' => $nombres[random_int(0, 7)],
                'apellidos'=> $apellidos[random_int(0,6)],
                'valoracion'=>$valoracion[random_int(0,10)],
                'kilometros' => random_int(10, 250),
            ]);
        }
    }
}
