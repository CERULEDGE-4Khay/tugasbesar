<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Comment;
use App\Models\MentorSession;

class AdminController extends Controller
{
    public function showMessages()
{
    $messages = Message::with('sender', 'receiver')->latest()->get();
    $sessions = MentorSession::latest()->with('user', 'mentor')->get();

    return view('admin.messages', compact('messages', 'sessions'));
}
    public function dashboard()
{
    $recentComments = Comment::latest()->with('user')->take(5)->get();
    return view('admin.dashboard', compact('recentComments'));
}
}
