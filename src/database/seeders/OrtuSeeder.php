<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ortu;

class OrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ortu::firstOrCreate([
            'name' => 'Ilham',
            'email' => 'ilhamganteng@gmail.com',
            'phone' => '0896029969554',
        ]);
    }
}
