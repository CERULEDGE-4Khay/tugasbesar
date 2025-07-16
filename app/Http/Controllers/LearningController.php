<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Courses;
use App\Models\Videos;
use App\Models\UserProgress;
use App\Models\Achievement;
use App\Models\QuizSubmission;
use App\Models\Mission;

class LearningController extends Controller
{
    // Menampilkan dashboard pengguna
    public function dashboard()
    {
        $user = Auth::user();
        $missions = Mission::with(['quizzes.quizSubmissions' => function($query) {
        $query->where('user_id', auth()->id());
    }, 'quizzes.quizAnswers'])->get();
        // Ambil progres user
        $progress = UserProgress::where('user_id', $user->id)->with('course')->get();

        // Ambil video terbaru
        $latestVideos = Videos::latest()->take(2)->get();

        $courses = Courses::all();

        // Ambil pencapaian
        $achievements = Achievement::where('user_id', $user->id)->get();

         // ✅ Ambil quiz yang sudah dikerjakan user
        $completedQuizzes = QuizSubmission::with('quiz')
            ->where('user_id', $user->id)
            ->get();

        // ✅ Ambil course yang sudah diselesaikan user
        $completedCourses = UserProgress::with('course')
            ->where('user_id', $user->id)
            ->where('is_completed', true)
            ->get();

        return view('dashboard', compact(
            'courses', 'user', 'progress', 'latestVideos', 'achievements','completedQuizzes','completedCourses','missions'));
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
    Log::info('Memulai penyimpanan progres...', $request->all());

    $validated = $request->validate([
        'course_id' => 'required|exists:courses,id',
        'progress_percentage' => 'required|numeric|min:0|max:100',
        'is_completed' => 'required|boolean'
    ]);

    Log::info('Validasi berhasil', $validated);

    $progress = UserProgress::updateOrCreate(
    [
        'user_id' => auth()->id(),
        'course_id' => $validated['course_id'],
    ],
    [
        'video_id' => null, 
        'progress_percentage' => $validated['progress_percentage'],
        'is_completed' => $validated['is_completed'],
    ]
    );


    Log::info('Progress tersimpan:', $progress->toArray());

    if ($progress->is_completed) {
        $course = Courses::find($validated['course_id']);
        Log::info('Course ditemukan:', ['course' => $course]);

        $achievementName = $course ? 'Selesaikan Kursus: ' . $course->name : 'Selesaikan Kursus';

        Achievement::firstOrCreate([
        'user_id' => auth()->id(),
        'achievement_name' => $achievementName,
    ], [
        'icon' => 'default-icon.png' // Ganti sesuai default icon kamu
    ]);


        Log::info('Achievement berhasil disimpan:', ['achievement_name' => $achievementName]);
    }
    Log::info('RETURN JSON', ['response' => 'Progress saved!']);
    return response()->json(['message' => 'Progress saved!'], 200);
}

}
