<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeAdvertisement>
 */
class HomeAdvertisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "top_advertisement_photo"=>"home-top-advertisement-photo.png",
            "top_advertisement_url"=>"https://www.example.com",
            "top_advertisement_status"=>"hide",
            "middle_advertisement_photo"=>"home-middle-advertisement-photo.png",
            "middle_advertisement_url"=>"https://www.example.com",
            "middle_advertisement_status"=>"hide",
            "bottom_advertisement_photo"=>"home-bottom-advertisement-photo.webp",
            "bottom_advertisement_url"=>"https://www.example.com",
            "bottom_advertisement_status"=>"hide",
        ];
    }
}
