<?php

namespace Hup234design\Cms\Commands;

use Awcodes\Curator\Models\Media;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CmsDownloadImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:download-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download Images from remote';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        foreach ($this->getImages() as $image) {
            // Specify the path where you want to save the images, e.g., in a 'downloads' directory in the current directory

//            $url      = "https://elliotstouch.hup234design.co.uk/storage/" . $image['path'];
//            $filename = Str::slug($image['title']) . "." . $image['ext'];
//            $path = base_path('development/images/' . $filename);
//
//            // Use file_get_contents to fetch the image from the URL
//            $image = file_get_contents($url);
//
//            // Use file_put_contents to save the image to the local filesystem
//            file_put_contents($path, $image);
//
//            $this->info("Downloaded: " . $filename);
//        }


//        foreach( Media::all() as $media ) {
//            $media->update(['id' => $media->id + 100]);
//        }


        foreach ($this->getImages() as $image) {
            $path = "media/" . Str::slug($image['title']) . "." . $image['ext'];
            if( $media = Media::where('path', $path)->first()) {
                $media->update(['id' => $image['id']]);
            }
        }
    }

    protected function getImages()
    {
        return [
            [
                "id" => 1,
                "path" => "media/cakes.jpg",
                "title" => "cakes",
                "ext" => "jpg"
            ],
            [
                "id" => 2,
                "path" => "media/donation-cheque.jpg",
                "title" => "donation-cheque",
                "ext" => "jpg"
            ],
            [
                "id" => 3,
                "path" => "media/clutch-finger.jpg",
                "title" => "clutch-finger",
                "ext" => "jpg"
            ],
            [
                "id" => 4,
                "path" => "media/hand.png",
                "title" => "hand",
                "ext" => "png"
            ],
            [
                "id" => 5,
                "path" => "media/dr-sanjay-prasad.jpg",
                "title" => "Dr-Sanjay-Prasad",
                "ext" => "jpg"
            ],
            [
                "id" => 6,
                "path" => "media/dr-richard-issit.png",
                "title" => "Dr-Richard-Issit",
                "ext" => "png"
            ],
            [
                "id" => 7,
                "path" => "media/elliot.jpg",
                "title" => "elliot",
                "ext" => "jpg"
            ],
            [
                "id" => 8,
                "path" => "media/professor-shamima-rahman.jpg",
                "title" => "Professor-Shamima -Rahman",
                "ext" => "jpg"
            ],
            [
                "id" => 9,
                "path" => "media/elliot-car.jpg",
                "title" => "elliot-car",
                "ext" => "jpg"
            ],
            [
                "id" => 10,
                "path" => "media/used-stamps.jpg",
                "title" => "used-stamps-2",
                "ext" => "jpg"
            ],
            [
                "id" => 11,
                "path" => "media/skydiving.jpg",
                "title" => "skydiving",
                "ext" => "jpg"
            ],
            [
                "id" => 12,
                "path" => "media/postbox.jpg",
                "title" => "postbox",
                "ext" => "jpg"
            ],
            [
                "id" => 13,
                "path" => "media/paul-dj.jpg",
                "title" => "paul-DJ",
                "ext" => "jpg"
            ],
            [
                "id" => 14,
                "path" => "media/elliots-touch-hi-viz.jpg",
                "title" => "Elliots-Touch-Hi-Viz",
                "ext" => "jpg"
            ],
            [
                "id" => 15,
                "path" => "media/ball-tables-2.jpg",
                "title" => "ball-tables-2",
                "ext" => "jpg"
            ],
            [
                "id" => 16,
                "path" => "media/ball-tables.jpg",
                "title" => "ball-tables",
                "ext" => "jpg"
            ],
            [
                "id" => 17,
                "path" => "media/elliots-headfone-disco-1.jpg",
                "title" => "Elliots-Headfone-Disco-1",
                "ext" => "jpg"
            ],
            [
                "id" => 18,
                "path" => "media/elliots-touch-at-gosh.jpg",
                "title" => "Elliots-Touch-at-GOSH",
                "ext" => "jpg"
            ],
            [
                "id" => 19,
                "path" => "media/brompton-pic.jpg",
                "title" => "Brompton-Pic",
                "ext" => "jpg"
            ],
            [
                "id" => 20,
                "path" => "media/watchet-marina.jpg",
                "title" => "watchet-marina",
                "ext" => "jpg"
            ],
            [
                "id" => 21,
                "path" => "media/elliot1.jpg",
                "title" => "elliot1",
                "ext" => "jpg"
            ],
            [
                "id" => 22,
                "path" => "media/silent-disco.jpg",
                "title" => "silent-disco",
                "ext" => "jpg"
            ],
            [
                "id" => 23,
                "path" => "media/2023-et-ball.jpg",
                "title" => "2023-ET-Ball",
                "ext" => "jpg"
            ],
            [
                "id" => 24,
                "path" => "media/elliot-in-bouncer.jpg",
                "title" => "elliot-in-bouncer",
                "ext" => "jpg"
            ],
            [
                "id" => 25,
                "path" => "media/cfdde1d1-b347-4178-8d31-5b17e801af1d.pdf",
                "title" => "MPC705 A Proposed GA PDF",
                "ext" => "pdf"
            ],
            [
                "id" => 26,
                "path" => "media/611b7d25-1eb7-4d32-a20f-44d46e9c476c.jpg",
                "title" => "MPC705 A Proposed GA",
                "ext" => "jpg"
            ],
            [
                "id" => 27,
                "path" => "media/204f8c9e-2728-4839-bf50-a438b9658a10.jpg",
                "title" => "used_stamps",
                "ext" => "jpg"
            ],
            [
                "id" => 28,
                "path" => "media/9663f52c-bee1-4c8e-aa0b-68e8b6fefdec.jpg",
                "title" => "coins",
                "ext" => "jpg"
            ],
            [
                "id" => 29,
                "path" => "media/8cd88066-980c-4dac-89d6-b088b21f074f.jpg",
                "title" => "will writing",
                "ext" => "jpg"
            ],
            [
                "id" => 30,
                "path" => "media/3a3ea114-0827-4710-b0c0-f30203b6eca6.jpg",
                "title" => "wine tasting",
                "ext" => "jpg"
            ],
            [
                "id" => 31,
                "path" => "media/f040562c-cfa1-4af3-8800-f0c5e57d8a58.jpg",
                "title" => "xmas lights",
                "ext" => "jpg"
            ],
            [
                "id" => 32,
                "path" => "media/7c6d6445-67d9-408a-8383-27f7c80da603.jpg",
                "title" => "sponsored swim",
                "ext" => "jpg"
            ],
            [
                "id" => 33,
                "path" => "media/762433c0-457a-43e6-a6ff-392f5d29f6b2.jpg",
                "title" => " fun run",
                "ext" => "jpg"
            ],
            [
                "id" => 34,
                "path" => "media/funrun.jpg",
                "title" => "funrun",
                "ext" => "jpg"
            ],
            [
                "id" => 35,
                "path" => "media/307caf0b-fc13-43e2-a161-08918e8d1c5f.jpg",
                "title" => "football tournament",
                "ext" => "jpg"
            ],
            [
                "id" => 36,
                "path" => "media/73a4f9a5-b850-4b8e-ae42-b20b437f50b7.jpg",
                "title" => "danceathon",
                "ext" => "jpg"
            ],
            [
                "id" => 37,
                "path" => "media/1fd59c86-600d-40e1-bc0c-120d06de6e0e.jpg",
                "title" => "summer ball set up",
                "ext" => "jpg"
            ],
            [
                "id" => 38,
                "path" => "media/e4718194-f779-40ed-a667-6617dc9054c4.jpg",
                "title" => "mufti",
                "ext" => "jpg"
            ],
            [
                "id" => 39,
                "path" => "media/8d7017d4-5670-4835-b087-11c2024cedc1.jpg",
                "title" => "car boot",
                "ext" => "jpg"
            ],
            [
                "id" => 40,
                "path" => "media/bec6c4fb-4b4c-4402-b4d1-bbd9c05898c4.jpg",
                "title" => "booksale",
                "ext" => "jpg"
            ],
            [
                "id" => 41,
                "path" => "media/f073cdb0-11eb-4178-919f-9051db187b68.jpg",
                "title" => "tombola",
                "ext" => "jpg"
            ],
            [
                "id" => 42,
                "path" => "media/90b10e53-c67c-46c2-ae14-b5b38a88f93a.jpg",
                "title" => "Collection box",
                "ext" => "jpg"
            ],
            [
                "id" => 43,
                "path" => "media/36078451-8776-4e38-afeb-92640525ca46.jpg",
                "title" => "declutter",
                "ext" => "jpg"
            ],
            [
                "id" => 44,
                "path" => "media/b45017c3-26d1-4f62-bfec-3bd8ab1383bc.jpg",
                "title" => "marathon",
                "ext" => "jpg"
            ],
            [
                "id" => 45,
                "path" => "media/c5b8ba31-5c98-48c7-a7da-5e66151eb81d.jpg",
                "title" => "tombola-2",
                "ext" => "jpg"
            ],
            [
                "id" => 46,
                "path" => "media/40bcbcd6-b6c8-4bf7-945e-bbc982608f49.jpg",
                "title" => "MPC705 A Proposed GA (Copy)",
                "ext" => "jpg"
            ]
        ];
    }
}
