<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    private array $data = [
        'Red Opel',
        'Blue Honda',
        'Black Toyota',
        'Yellow Peugeot',
        'Green Mercedes',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $carName) {

            DB::table('cars')->insert([
                'name' => $carName
            ]);
        }
    }
}
