<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Movie', 'slug' => 'movie'],
            ['name' => 'TV Show', 'slug' => 'tvshow'],
            ['name' => 'Anime', 'slug' => 'anime']
        ]);
    }
}
