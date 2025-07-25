<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Mission;
use App\Models\Comment;
use App\Models\MentorSession;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller // Jembatan antara view dan database.
{
    public function showMessages()
    {
        $messages = Message::with('sender', 'receiver')
            ->latest()
            ->get(); // Ini teh mengambil data message dengan relasi tabel sender
        $sessions = MentorSession::latest()
            ->with('user', 'mentor')
            ->get();

        return view('admin.messages', compact('messages', 'sessions')); // compact itu berfungsi untuk melempar data ke view
    }
    public function dashboard()
    {
        $selectedYear = request()->get('year', now()->year);
        $recentComments = Comment::latest()
            ->with('user')
            ->take(5)
            ->get();

        $totalVisitors = User::whereNotNull('last_login_at')->count();
        $userCount = User::count(); // count untuk hitung semua data user
        $quizCount = Quiz::count();
        $missionCount = Mission::count();
        $recentComments = Comment::latest()
            ->with('user')
            ->take(5)
            ->get();

        $monthlyVisitors = DB::table('users')
            ->select(DB::raw('MONTH(last_login_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereNotNull('last_login_at')
            ->whereYear('last_login_at', now()->year)
            ->groupBy(DB::raw('MONTH(last_login_at)'))
            ->pluck('count', 'month')
            ->toArray();

        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = $monthlyVisitors[$i] ?? 0;
        }

        $availableYears = User::whereNotNull('last_login_at') // mengambil user yang las_login_at nya tidak null
            ->selectRaw('YEAR(last_login_at) as year')
            ->distinct()
            ->orderByDesc('year') // Mengambil data dari taun yang terbaru
            ->pluck('year')
            ->toArray();

        return view('admin.index', compact('userCount', 'quizCount', 'missionCount', 'recentComments', 'labels', 'data', 'selectedYear', 'availableYears', 'totalVisitors'));
    }
    public function profile()
    {
        $user = auth()->user(); // ambil data admin yg login
        return view('admin.profile', compact('user'));
    }
}
