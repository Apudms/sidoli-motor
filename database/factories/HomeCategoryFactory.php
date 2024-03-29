<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\HomeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::pluck('id')->take(7)->toArray();
        return [
            'sel_categories' => implode(',', $categories),
            'no_produk' => 8,
        ];
    }
}
