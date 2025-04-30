<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed Categories
        Category::create([
            'name' => 'Tech',
            'description' => 'Artikel seputar teknologi.'
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'description' => 'Artikel tentang gaya hidup.'
        ]);

        // Seed Tags
        Tag::create(['name' => 'Laravel']);
        Tag::create(['name' => 'IoT']);
        Tag::create(['name' => 'PHP']);

        // Seed User (Admin)
        User::create([
            'username' => 'munn',
            'email' => 'munn@timun.com',
            'password' => bcrypt('password'), // Ganti dengan password yang aman
            'role' => 'admin'
        ]);

        // Seed User (Editor)
        User::create([
            'username' => 'editor',
            'email' => 'editor@timun.com',
            'password' => bcrypt('password'),
            'role' => 'editor'
        ]);
    }
}
