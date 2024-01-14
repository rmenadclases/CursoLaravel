<?php

namespace Database\Seeders;
use App\Models\Users;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea 10 usuarios falsos utilizando la factory
        Users::factory(10)->create();
    }
}
