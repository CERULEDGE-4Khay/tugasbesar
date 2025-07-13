<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

//     public function testAchievement()
// {
//     $user = auth()->user();

//     // Tes tampilkan semua achievement user
//     foreach ($user->achievements as $achievement) {
//         dump($achievement->title);
//     }

//     // Tambahkan 1 achievement ke user
//     $achievement = \App\Models\Achievement::first(); // Ambil salah satu achievement
//     $user->achievements()->syncWithoutDetaching([$achievement->id]);

//     return 'Berhasil assign achievement!';
// }
}
