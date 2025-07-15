<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\MentorSession;
use Illuminate\Http\Request;

class MentoringController extends Controller
{
     public function index()
    {
        $mentors = Mentor::all();
        
        return view('mentoring.index', compact('mentors'));
    }

    public function scheduleForm(Mentor $mentor)
    {
        return view('mentoring.schedule', compact('mentor'));
    }

    public function storeSchedule(Request $request, Mentor $mentor)
    {
        $request->validate([
            'scheduled_at' => 'required|date|after:now'
        ]);

        MentorSession::create([
            'user_id' => auth()->id(),
            'mentor_id' => $mentor->id,
            'scheduled_at' => $request->scheduled_at,
            'notes' => $request->notes
        ]);

        return redirect()->route('mentoring.index')->with('success', 'Sesi berhasil dijadwalkan!');
    }
}
