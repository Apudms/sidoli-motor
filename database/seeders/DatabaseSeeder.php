<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
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

        Category::create(
            [
                'name' => 'Honda',
                'slug' => 'honda'
            ]
        );

        Category::create(
            [
                'name' => 'Yamaha',
                'slug' => 'yamaha'
            ]
        );

        Category::create(
            [
                'name' => 'Suzuki',
                'slug' => 'suzuki'
            ]
        );

        Category::create(
            [
                'name' => 'Kawasaki',
                'slug' => 'kawasaki'
            ]
        );

        Category::create(
            [
                'name' => 'TDR',
                'slug' => 'tdr'
            ]
        );

        Category::create(
            [
                'name' => 'Kawahara',
                'slug' => 'kawahara'
            ]
        );

        Category::create(
            [
                'name' => 'Michelin',
                'slug' => 'michelin'
            ]
        );

        Category::create(
            [
                'name' => 'Ring Velg',
                'slug' => 'ring_velg'
            ]
        );

        Category::create(
            [
                'name' => 'Ban Tubeless',
                'slug' => 'ban_tubeless'
            ]
        );

        Category::create(
            [
                'name' => 'Oli',
                'slug' => 'oli'
            ]
        );

        //Category::factory(7)->create();
        Product::factory(73)->create();
        Banner::factory(3)->create();
    }
}
