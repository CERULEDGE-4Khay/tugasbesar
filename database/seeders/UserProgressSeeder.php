<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProgress;
use App\Models\Videos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        $users = User::all();
        $videos = Videos::all();

        if ($users->count() == 0 || $videos->count() < 1) {
            echo "User atau video kosong. Seeder dilewati.\n";
            return;
        }

        foreach ($users as $user) {
            $videoTerpilih = $videos->count() >= 2 ? $videos->random(2) : $videos;
            foreach ($videoTerpilih as $video) {
                UserProgress::create([
                    'user_id' => $user->id,
                    'video_id' => $video->id,
                    'progress_percent' => rand(10, 100),
                ]);
            }
        }

        echo "Seeder user_progress berhasil isi data.\n";
    }
}
