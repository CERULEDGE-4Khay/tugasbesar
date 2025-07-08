<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function course(){
        return $this->belongsTo(Courses::class);
    }
    public function progress(){
        return $this->hasMany(UserProgress::class);
    }
}
