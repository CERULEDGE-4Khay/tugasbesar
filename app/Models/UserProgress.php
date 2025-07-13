<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'user_id',
        'course_id',
        'video_id',
        'progress_percentage',
        'is_completed',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'progress_percentage' => 'integer',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course() {
    return $this->belongsTo(Courses::class,'course_id');
    }
     public function video(){
        return $this->belongsTo(Videos::class);
    }

}
