<?php

namespace App\Http\Controllers;

use App\Models\UserProgress;
use App\Models\Videos;
use App\Models\Achievements;
use Illuminate\Http\Request;

class UserProgressController extends Controller
{
    
    // public function markVideoAsCompleted($videoId)
    // {
    //     $userId = auth()->id();
    //     $video = Videos::findOrFail($videoId);

    //     UserProgress::updateOrCreate(
    //         [
    //             'user_id' => $userId,
    //             'videos_id' => $video->id,
    //         ],
    //         [
    //             'courses_id' => $video->courses_id,
    //             'is_completed' => true,
    //         ]
    //     );

    //     $completed = UserProgress::where('user_id', $userId)
    //     ->where('course_id', $video->course_id)
    //     ->where('is_completed', true)
    //     ->count();

    //     $total = $video->course->videos()->count();
    //     $progress = $total > 0 ? round(($completed / $total) * 100) : 0;

    //     if ($completed === $total) {
    //         Achievements::firstOrCreate([
    //             'user_id' => $userId,
    //             'title' => 'Sertifikat: ' . $video->course->title,
    //         ], [
    //             'description' => 'Menyelesaikan semua materi di course ' . $video->course->title,
    //             'file_path' => null,
    //         ]);
    //     }
    //     return back()->with('success', 'Progress berhasil disimpan! ('.$progress.'%)');

    // }
    public function update(Request $request)
    {
        $userId = auth()->id(); // pastikan pakai auth middleware
        $progress = UserProgress::updateOrCreate(
            [
                'user_id' => $userId,
                'courses_id' => $request->course_id,
                'videos_id' => $request->video_id,
            ],
            [
                'progress_percentage' => $request->progress_percentage,
                'is_completed' => $request->is_completed,
            ]
        );

        return response()->json(['status' => 'success']);
    }

    public function calculateCourseProgress($userId, $courseId)
    {
        $totalVideos = Videos::where('courses_id', $courseId)->count();
        $completed = UserProgress::where('user_id', $userId)
            ->where('course_id', $courseId)
            ->where('is_completed', true)
            ->count();

        return $totalVideos > 0 ? round(($completed / $totalVideos) * 100) : 0;
    }
}
