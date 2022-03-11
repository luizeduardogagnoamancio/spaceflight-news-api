<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Event;
use App\Models\Launch;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating 5 launches
        $i = 1;
        while ($i < 6) {
            Launch::create([
                'id' => $i,
                'provider' => "Launch {$i}"
            ]);
            $i += 1;
        }


        // Creating 5 events
        $i = 1;
        while ($i < 6) {
            Event::create([
                'id' => $i,
                'provider' => "Launch {$i}"
            ]);
            $i += 1;
        }


        // Creating 7 articles
        $i = 1;
        while ($i < 8) {
            Article::create([
                'id' => $i,
                'title' => "Article {$i}",
                'url' => "Url {$i}",
                'imageUrl' => "Image Url {$i}",
                'newsSite' => "http://www.site{$i}.com",
                'summary' => "Summary {$i}",
                'publishedAt' => date('Y-m-d H:i:s'),
                'updatedAt' => date('Y-m-d H:i:s'),
                'featured' => rand(0,1)
            ]);
            $i += 1;
        }


        // Creating 10 blogs
    }
}