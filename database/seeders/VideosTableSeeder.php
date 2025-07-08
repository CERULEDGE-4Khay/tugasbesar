<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Video;
use App\Models\Videos;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = Courses::first();

        if (!$course) {
            echo "Seeder VideosTableSeeder dilewati karena tidak ada data courses.\n";
            return;
        }

        $videos = ['Chord Dasar A', 'Strumming Pop', 'Melodi Gitar Pemula'];

        foreach ($videos as $title) {
            Videos::create([
                'title' => $title,
                'video_url' => 'https://example.com/video.mp4',
                'duration' => rand(180, 600),
                'courses_id' => $course->id
            ]);
        }

    }
}
