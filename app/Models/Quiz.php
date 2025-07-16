<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function quizAnswers() {
        return $this->hasMany(QuizAnswer::class);
    }
    public function mission(){
        return $this->belongsTo(Mission::class);
    }
    public function quizSubmissions()
{
    return $this->hasMany(QuizSubmission::class);
}

}
