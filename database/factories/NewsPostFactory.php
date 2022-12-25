<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsPost>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->title(),
            "slug"=>$this->faker->slug(),
            "photo"=>"https://www.vuelio.com/uk/wp-content/uploads/2019/02/Breaking-News.jpg",
            "body"=>$this->faker->paragraph(5),
        ];
    }
}
