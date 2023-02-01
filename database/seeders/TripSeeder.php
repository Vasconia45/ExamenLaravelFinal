<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $origins = ['Frankfurt', 'Genova', 'New York', 'Los Angeles', 'Camberra', 'Beijing',
            'London', 'Paris', 'Prague', 'Warsaw'];
        $destinies = ['Sevilla', 'Bordeaux', 'Donostia', 'Mexico D.C.', 'Tokio',
            'Moscow', 'Oslo', 'Amsterdam', 'Johannesburg', 'Nairobi'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('trips')->insert([
                'fecha' => Carbon::today()->subDays(rand(-200, 365)),
                'origen' => $origins[random_int(0, 9)],
                'destino' => $destinies[random_int(0, 9)],
                'plazas' => random_int(0, 8),
            ]);
        }
    }
}
