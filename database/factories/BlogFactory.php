<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $title = $this->faker->sentence;
        return [
            'title' => $title, // Sahte başlık
            'content' => $this->faker->paragraphs(3, true), // Sahte içerik
            'slug' => Str::slug($title), //Sahte başlık slug'ı
            'category_id' => \App\Models\Category::factory(), // Rastgele bir kategori oluştur
            'user_id' => \App\Models\User::factory(), // Rastgele bir kullanıcı oluştur
        ];
    }
}
