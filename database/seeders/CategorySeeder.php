<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Horor',
            'slug' => 'kategori-Horor',
        ]);

        Category::create([
            'nama' => 'Science',
            'slug' => 'kategori-Science',
        ]);
        Category::create([
            'nama' => 'Mystery',
            'slug' => 'kategori-Mystery',
        ]);
        Category::create([
            'nama' => 'Community',
            'slug' => 'kategori-Community',
        ]);
        Category::create([
            'nama' => 'Goverment',
            'slug' => 'kategori-Goverment',
        ]);
    }
}
