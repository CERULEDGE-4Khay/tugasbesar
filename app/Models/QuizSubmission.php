<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSubmission extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'quiz_id',
        'quiz_answer_id',
        'score',
    ];

     public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }


    public function answer()
    {
        return $this->belongsTo(QuizAnswer::class, 'quiz_answer_id');
    }
    public function quizAnswer()
    {
    return $this->belongsTo(QuizAnswer::class);
    }
}
