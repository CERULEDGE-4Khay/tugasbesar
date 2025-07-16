<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Mission;
use App\Models\Quiz;
use App\Models\QuizAnswer;
use App\Models\QuizSubmission;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('mission_id')) {
            $quizzes = Quiz::where('mission_id', $request->mission_id)->with('mission')->get();
        } else {
            $quizzes = Quiz::with('mission')->get();
        }

        return view('admin.quiz.index', compact('quizzes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $missions = Mission::all();
        return view('admin.quiz.create', compact('missions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'mission_id'    => 'required|exists:missions,id', 
            'quiz_title'    => 'required|string|max:255',
            'video'         => 'nullable|string',
            'quiz_description' => 'nullable|string',
            'content'       => 'nullable|string',
            'tipe'          => 'required|in:beginner,intermediate,pro',
            'level'         => 'required|in:1,2,3,4,5',
            'answers'       => 'required|array|min:1',
            'answers.*'     => 'required|string',
            'correct'       => 'nullable|numeric'
        ]);

        // Simpan ke tabel quizzes
        $quiz = Quiz::create([
            'mission_id'        => $request->mission_id, 
            'quiz_title'        => $request->quiz_title,
            'quiz_description'  => $request->quiz_description,
            'content'           => $request->content,
            'tipe'              => $request->tipe,
            'level'             => $request->level
        ]);

        // Simpan jawaban
        foreach ($request->answers as $index => $answer) {
            QuizAnswer::create([
                'quiz_id'  => $quiz->id,
                'answer'   => $answer,
                'is_right' => ($request->correct == $index)
            ]);
        }

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil ditambahkan!');
    }


    
    public function showAll()
    {
        $missions = Mission::latest()->get(); // ambil semua quiz
        // return view('quiz', compact('missions'));
        return view('quiz', compact('missions'));
    }

    public function showDetail($missionId)
    {
        $mission = Mission::find($missionId);
        $quizzes = $mission->quizzes;

        return view('quiz-detail', compact('quizzes'));
    }

    public function submitQuiz(Request $request, $id)
    {
        $quiz = Quiz::with('answers')->findOrFail($id);

        $request->validate([
            'answer_id' => 'required|exists:quiz_answers,id'
        ]);

        $selected = $quiz->answers->where('id', $request->answer_id)->first();
        $isCorrect = $selected->is_right;

        // Nanti bisa disimpan ke tabel skor / progres user di sini

        return redirect()->route('quiz-detail', $quiz->id)->with('result', $isCorrect ? 'Jawaban kamu benar! 🎉' : 'Jawaban kamu salah 😢');
    }

public function submitAll(Request $request)
{
    $user = auth()->user();
    $answers = $request->input('answers');

    $benar = 0; 
    $total = count($answers);

    $quizDetails = []; // ← untuk menampung detail soal dan jawaban

    foreach ($answers as $quizId => $answerId) {
        $quiz = Quiz::with('quizAnswers')->find($quizId);
        $selectedAnswer = $quiz->quizAnswers->where('id', $answerId)->first();
        $correctAnswer = $quiz->quizAnswers->where('is_right', 1)->first();

        $isCorrect = $selectedAnswer && $selectedAnswer->is_right;

        if ($isCorrect) {
            $benar++;
        }

        // Hindari submit ganda
        $alreadySubmitted = QuizSubmission::where('user_id', $user->id)
                            ->where('quiz_id', $quizId)
                            ->exists();

        if (!$alreadySubmitted) {
            QuizSubmission::create([
                'user_id'         => $user->id,
                'quiz_id'         => $quizId,
                'quiz_answer_id'  => $answerId,
                'score'           => $isCorrect ? 1 : 0
            ]);
        }

        // Simpan detail soal & jawaban
        $quizDetails[] = [
            'question' => $quiz->question,
            'selected_answer' => $selectedAnswer?->answer ?? 'Tidak dijawab',
            'correct_answer'  => $correctAnswer?->answer ?? 'Tidak tersedia',
            'is_correct' => $isCorrect,
        ];
    }

    $score = round(($benar / $total) * 100);

    return view('hasilquiz', [
        'score' => $score,
        'total' => $total,
        'benar' => $benar,
        'quizDetails' => $quizDetails // ← kirim ke view
    ]);
}


    public function show(Quiz $quiz)
    {
        return view('admin.quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
