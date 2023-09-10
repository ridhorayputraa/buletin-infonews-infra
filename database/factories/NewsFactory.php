<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
               'category_id' => mt_rand(1,5),
               'author_id' => mt_rand(1,2),
               'title' => $this->faker->sentence(mt_rand(2,8)),
               'excerpt' => $this->faker->sentence(mt_rand(300,500)),
               'body' => collect($this->faker->paragraphs(mt_rand(5,20)))->map(function($p){
                return "<p>$p</p><br>";
               })->implode(''),
               'slug' => $this->faker->slug(),
               'thumbnail' => 'ganjar-pranowo-3_169.png',
               'photo_description' => $this->faker->sentence(mt_rand(2,8)),
               'created_at' => now(), // Tambahkan ini untuk mengisi created_at
               'updated_at' => now(), // Tambahkan ini untuk mengisi updated_at
               'published_at' => now(), 
        ];
    }
}
