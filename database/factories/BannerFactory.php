<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $banner_name = $this->faker->unique()->words($nb = 2, $asText = true);
        $slug = Str::slug($banner_name);
        return [
            'name' => $banner_name,
            'slug' => $slug,
            'image' => 'banner_' . $this->faker->unique()->numberBetween(1, 3) . '.png',
        ];
    }
}
