<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Videos;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all();
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'video' => 'nullable|file|mimetypes:video/mp4,video/webm,video/ogg|max:204800',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        $course = Courses::create([
            'name' => $request->name,
            'tipe' => $request->tipe,
            'description' => $request->description,
            'content' => $request->content,
            'level' => $request->level
        ]);

        if($request->hasFile('video')) {
            foreach($request->file('video') as $image) {
                $path = $image->store('video');

                Videos::create([
                    'title' => $course->name,
                    'course_id' => $course->id,
                    'video_url' => $path
                ]);
            }
        }

        return redirect()->route('course.index')->with('success', 'Course berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        return view('admin.course.course', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $courses)
    {
        return view('admin.course.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        $courses->delete();
        return redirect()->route('course.index')->with('success', 'Course berhasil dihapus!');
    }
}
