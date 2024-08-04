<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            ['slug' => '/privacy-policy'],
            ['slug' => '/contact'],
            ['slug' => '/history'],
            ['slug' => '/level'],
            ['slug' => '/magic'],
            ['slug' => '/gold'],
            ['slug' => '/jsdesign'],
            ['slug' => '/hcbackvideo'],
            ['slug' => '/gpanime'],
            ['slug' => '/bs5website'],
            ['slug' => '/blog'],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}