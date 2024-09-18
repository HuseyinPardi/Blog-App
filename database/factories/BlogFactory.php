<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Sahte başlık
            'content' => $this->faker->paragraphs(3, true), // Sahte içerik
            'category_id' => \App\Models\Category::factory(), // Rastgele bir kategori oluştur
            'user_id' => \App\Models\User::factory(), // Rastgele bir kullanıcı oluştur
        ];
    }
}
