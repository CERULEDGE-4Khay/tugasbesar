<?php

namespace App\Http\Controllers;

use App\Models\Chord;
use Illuminate\Http\Request;

class ChordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
    $chords = Chord::all(); // atau bisa pakai paginate kalau datanya banyak
    return view('admin.chords.index', compact('chords'));
    }

    public function katalog()
    {
    $chords = Chord::all();
    return view('chord', compact('chords')); // ini sesuai dengan nama file kamu
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.chords.create');
    }


    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|in:major,minor',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = $request->file('image')->store('chords', 'public');

    Chord::create([
        'name' => $request->name,
        'type' => $request->type,
        'image' => $imagePath,
    ]);

    return redirect()->route('chords.index')->with('success', 'Chord berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Chord $chord)
    {
    return view('admin.chords.edit', compact('chord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chord $chord)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|in:major,minor',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $chord->name = $request->name;
    $chord->type = $request->type;

    if ($request->hasFile('image')) {
        // Simpan gambar baru
        $imagePath = $request->file('image')->store('chords', 'public');
        $chord->image = $imagePath;
    }

    $chord->save();

    return redirect()->route('chords.index')->with('success', 'Chord berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Chord $chord)
    {
    $chord->delete();
    return redirect()->route('chords.index')->with('success', 'Chord berhasil dihapus.');
    }
}
