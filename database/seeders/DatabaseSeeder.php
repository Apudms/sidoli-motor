<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
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
                'nama_kategori' => 'Honda',
                'slug' => 'honda'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Yamaha',
                'slug' => 'yamaha'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Suzuki',
                'slug' => 'suzuki'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Kawasaki',
                'slug' => 'kawasaki'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'TDR',
                'slug' => 'tdr'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Kawahara',
                'slug' => 'kawahara'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Michelin',
                'slug' => 'michelin'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Ring Velg',
                'slug' => 'ring_velg'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Ban Tubeless',
                'slug' => 'ban_tubeless'
            ]
        );

        Category::create(
            [
                'nama_kategori' => 'Oli',
                'slug' => 'oli'
            ]
        );

        //Category::factory(7)->create();
        Product::factory(73)->create();
        //HomeSlider::factory(3)->create();
    }
}
