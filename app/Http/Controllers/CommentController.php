<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Dom\Comment as DomComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'comment' => 'required|string|max:500',
    ]);

    Comment::create([
        'user_id' => auth()->id(),
        'comment' => $request->comment,
    ]);

    return back()->with('success', 'Komentar berhasil dikirim!');
}
}
