<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Courses;
use App\Models\Videos;
use App\Models\UserProgress;
use App\Models\Achievement;

class LearningController extends Controller
{
    // Menampilkan dashboard pengguna
    public function dashboard()
    {
        $user = Auth::user();

        // Ambil progres user
        $progress = UserProgress::where('user_id', $user->id)->with('course')->get();

        // Ambil video terbaru
        $latestVideos = Videos::latest()->take(2)->get();

        $courses = Courses::all();

        // Ambil pencapaian
        $achievements = Achievement::where('user_id', $user->id)->get();

        return view('dashboard', compact('courses', 'user', 'progress', 'latestVideos', 'achievements'));
    }

    // Menampilkan daftar kursus / modul
    public function courses()
    {
        $courses = Courses::orderBy('order')->get();
        return view('index', compact('courses'));
    }

    // Menampilkan detail kursus dan videonya
    public function courseDetail(Courses $courses)
    {
        $videos = $courses->videos;
        return view('courses', compact('courses', 'videos'));
    }

    // Tonton video
    public function watchVideo($id)
    {
        $video = Videos::with('course')->findOrFail($id);
        return view('videos.watch', compact('video'));
    }

    // Simpan progres belajar
    public function saveProgress(Request $request)
    {
        $progress = UserProgress::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'course_id' => $request->course_id,
            ],
            [
                'progress_percentage' => $request->progress,
                'is_completed' => $request->progress >= 100,
            ]
        );

        // Tambahkan pencapaian jika selesai
        if ($progress->is_completed) {
            Achievement::firstOrCreate([
                'user_id' => Auth::id(),
                'achievement_name' => 'Selesaikan Kursus: ' . $progress->course->title,
            ]);
        }

        return redirect()->back()->with('status', 'Progres berhasil disimpan!');
    }
}
