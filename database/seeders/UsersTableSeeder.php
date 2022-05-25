<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    private array $data = [
        'John Doe',
        'Mark Zuckerberg',
        'Elon Musk',
        'Steve Jobs',
        'Bill Gates'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->data as $userName)
        DB::table('users')->insert([
            'name' => $userName,
            'email' => Str::random(10).'@mail.test',
            'password' => Hash::make('password'),
        ]);
    }
}
