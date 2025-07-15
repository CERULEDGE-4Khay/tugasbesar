<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
     public function index(Mentor $mentor)
    {
        $messages = Message::where(function($q) use ($mentor) {
            $q->where('sender_id', auth()->id())
              ->where('receiver_id', $mentor->id);
        })->orWhere(function($q) use ($mentor) {
            $q->where('sender_id', $mentor->id)
              ->where('receiver_id', auth()->id());
        })->orderBy('created_at')->get();

        return view('chat.index', compact('messages', 'mentor'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string|max:1000'
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);

        return back()->with('success', 'Pesan berhasil dikirim ke mentor!');

    }
}
