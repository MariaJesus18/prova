<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin2',
            'admin' => 1,
        ]);
        \App\Models\cadUser::factory()->create([
            'name' => 'jose',
            'email' => 'jose@gmail.com',
            'phone'=> '84909090909',
        ]);
        \App\Models\cadUser::factory()->create([
            'name' => 'joao',
            'email' => 'joao@gmail.com',
            'phone'=> '84909090909',
        ]);


        // \App\Models\Task::factory(10)->create();
    }
}
