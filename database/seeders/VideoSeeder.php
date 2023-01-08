<?php

namespace Database\Seeders;

use App\Models\VideosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'link' => "https://www.youtube.com/embed/3SCy0NqFPfw",
            'name' => 'bargain car',
            'desc' => 'm6 peak.'
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/GozQCpgJYMg',
            'name' => 'Arcane is Incredible. No, Really.',
            'desc' => "Who knew I'd wake up in a world where League of Legends was my Anime of the year."
        ]);
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/RDF1dTv_WsMRI&index=4',
            'name' => 'mozart',
            'desc' => "cuz i like it"
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/_Kf-2D1vge8',
            'name' => "throttle house",
            'desc' => "funny car channel"
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/vHDNQe8qrss',
            'name' => 'Ronnie Coleman screaming for 4 hours',
            'desc' => 'LIGHT WEIGHT!!!'
        ]);
    }
}
