<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('prodi')->insert([[
            'name_prodi' => 'TI'

        ],
        [
            'name_prodi' => 'SIB'
        ]]
        );

        DB::table('users')->insert([
            'prodi_id' => 1,
            'NIM' => '2141720039',
            'name' => 'Achmad Aly Abdulloh',
            'kelas' => '2E',
            'email' => 'uwongsabar12@gmail.com',
            'pengalaman_kuliah' => 'CUMA KUPU-KUPU'
        ]);
    }
}
