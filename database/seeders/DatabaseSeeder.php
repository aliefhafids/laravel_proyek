<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\CategoryEmployee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        CategoryEmployee::create([
            'name' => 'Admin',
            'code' => 'A1'
        ]);

        CategoryEmployee::create([
            'name' => 'Montir',
            'code' => 'MN1'
        ]);

        CategoryEmployee::create([
            'name' => 'Sopir',
            'code' => 'S1'
        ]);

    }
}
