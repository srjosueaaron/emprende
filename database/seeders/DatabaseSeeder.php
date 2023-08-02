<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(2)->create();
        \App\Models\Egresado::factory(10)->create();

         \App\Models\User::create([
           'name' => 'David Trejo',
            'email' => 'enlacescomercialesred@gmail.com',
            'email_verified_at' => now(),
           'password' => bcrypt('tp9GC6uhezW2nE'),
           'remember_token' => \Illuminate\Support\Str::random(10)
        ]); 
        
    }
}
