<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Todo::create(['title' => 'First Todo', 'completed' => false]);
        \App\Models\Todo::create(['title' => 'Second Todo', 'completed' => false]);
        \App\Models\Todo::create(['title' => 'Third Todo', 'completed' => false]);
    }
}
