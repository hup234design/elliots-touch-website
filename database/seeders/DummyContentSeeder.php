<?php

namespace Database\Seeders;

use App\Models\Page;
use Carbon\Carbon;
use Exception;
use Hup234design\Cms\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RyanChandler\FilamentNavigation\Models\Navigation;

class DummyContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('navigations')->truncate();
        DB::table('pages')->truncate();
        DB::table('posts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $pages = ['Welcome' => 4,'About' => 4,'Contact' => 2,'Terms & Conditions' => 10, 'Privacy Policy' => 10, 'Cookie Policy' => 8];
        foreach($pages as $title=>$paragraphs) {
            $slug = Str::slug($title);
            $content = $this->getContent($paragraphs);
            Page::create([
                'title'   => $title,
                'slug'    => $slug,
                'content' => json_encode($content),
                'is_home' => $title == 'Welcome'
            ]);
        }

        for($id=1; $id<=10; $id++) {
            $title="Dummy Post " . $id;
            $slug = Str::slug($title);
            $summary = fake()->paragraph();
            $content = $this->getContent(rand(4,8));
            Post::create([
                'title'   => $title,
                'slug'    => $slug,
                'summary' => $summary,
                'published_at' => Carbon::now(),
                'is_visible' => true,
                'content' => $content
            ]);
        }

        Navigation::create([
            'name'   => 'Header',
            'handle' => 'header',
            'items'  => [
                Str::uuid()->toString() => ["label" => "Home",  "type" => "home-page", "data" => null, "children" => []],
                Str::uuid()->toString() => ["label" => "About", "type" => "page", "data" => ['id' => 2], "children" => []],
                Str::uuid()->toString() => ["label" => "Posts", "type" => "index-page", "data" => ['route' => 'posts.index'], "children" => []],
                Str::uuid()->toString() => ["label" => "Contact", "type" => "page", "data" => ['id' => 3], "children" => []],
            ]
        ]);

        Navigation::create([
            'name'   => 'Footer',
            'handle' => 'footer',
            'items'  => [
                Str::uuid()->toString() => ["label" => "Home",  "type" => "home-page", "data" => null, "children" => []],
                Str::uuid()->toString() => ["label" => "Terms & Conditions",  "type" => "page", "data" => ['id' => 4], "children" => []],
                Str::uuid()->toString() => ["label" => "Privacy Policy",  "type" => "page", "data" => ['id' => 5], "children" => []],
                Str::uuid()->toString() => ["label" => "Cookie Policy",  "type" => "page", "data" => ['id' => 6], "children" => []],
                Str::uuid()->toString() => ["label" => "Contact",  "type" => "page", "data" => ['id' => 3], "children" => []],
            ]
        ]);



//        {"0bb22650-45b4-4e37-a470-61000c33b53c":{"label":"Home","type":"home-page","data":null,"children":[]},"061187e8-6318-499e-a236-7a89ff2bd902":{"label":"About","type":"page","data":{"page_id":"2"},"children":[]}}
    }

    private function getContent($totalParagraphs=3)
    {

        $contentParagraphs = [];
        for($x=1; $x<=$totalParagraphs; $x++) {
            $contentParagraphs[] = [
                "type" => "paragraph",
                "attrs" => [
                   "textAlign" => "start"
                ],
                "content" => [
                    [
                        "text" => fake()->paragraph(10),
                        "type" => "text"
                    ]
                ]
            ];
        }

        return [
            "type" => "doc",
            "content" => $contentParagraphs
        ];
    }
}
