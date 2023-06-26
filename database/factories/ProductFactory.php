<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($product_name);
        return [
            'nama_produk' => $product_name,
            'slug' => $slug,
            'deskripsi_singkat' => $this->faker->text(200),
            'deskripsi' => $this->faker->text(500),
            'harga_normal' => $this->faker->numberBetween(10000, 400000),
            'SKU' => 'ONDR' . $this->faker->unique()->numberBetween(100, 500),
            'status_stok' => 'Tersedia',
            'jumlah_stok' => $this->faker->numberBetween(10, 100),
            'image' => 'barang_' . $this->faker->numberBetween(1, 72) . '.jpg',
            'category_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
