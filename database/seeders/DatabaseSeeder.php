<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        User::create(
            [
                'name' => 'Admin Sidoli Motor',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin123'),
                'remember_token' => Str::random(30),
                'utype' => 'ADM',
            ]
        );

        User::create(
            [
                'name' => 'Firhan Surya',
                'email' => 'firhan@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('firhan123'),
                'remember_token' => Str::random(30),
                'utype' => 'USR',
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Suku Cadang',
                'slug' => 'suku-cadang'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Variasi',
                'slug' => 'variasi'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'V-belt',
                'slug' => 'v-belt'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Lampu Motor',
                'slug' => 'lampu-motor'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Ban',
                'slug' => 'ban'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Oli',
                'slug' => 'oli'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Lampu LED',
                'slug' => 'lampu_led'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Radiator Coolant',
                'slug' => 'radiator-coolant'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Busi',
                'slug' => 'busi'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Kampas Rem',
                'slug' => 'kampas-rem'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Bearing',
                'slug' => 'bearing'
            ]
        );

        //Category::factory(7)->create();
        //Product::factory(73)->create();

        Product::factory(164)->create();

        HomeCategory::factory(1)->create();
        //HomeSlider::factory(3)->create();
    }
}
