<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::firstOrCreate([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'phone' => '0895336900466',
            'ortu_id'=>1, # Tambahan field ortu_id dengan nilai 1 (Pertemuan 5). 
            # Pastikan bahwa data Ortu dengan id 1 sudah ada di tabel ortus sebelum menjalankan seeder ini, karena ada relasi foreign key yang mengacu ke tabel ortus. 
            # Jika tidak, maka akan terjadi error saat menjalankan seeder.
         ]);
    }
}
