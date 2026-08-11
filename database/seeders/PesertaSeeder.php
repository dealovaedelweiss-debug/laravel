<?php

namespace Database\Seeders;

use App\Models\peserta;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert into
        // peserta::create([
        //     'name' => 'Pamela',
        //     'email' => 'Pamela@gmail.com',
        //     'age' => 27,
        //     'address' => 'London',
        // ]);
        peserta::factory(50)->create();
    }
}
