<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Önce bazı kullanıcılar oluştur
        \App\Models\User::factory(10)->create();

        // Sonra kategoriler oluştur
        \App\Models\Category::factory(5)->create();

        // En son bloglar oluştur
        \App\Models\Blog::factory(20)->create();
    }
}
